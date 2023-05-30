<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->data['title_page'] = 'DASHBOARD';
        $this->data['active'] = 'dashboard';
    }

    public function getIndex()
    {
        $resident = model("App\Models\Resident_m",false);
        $street   = model("App\Models\Street_m",false);
        $blotter  = model("App\Models\Blotter_m",false);
        $incident = model("App\Models\Incident_m",false);

        // $this->data['PWD']      = $resident->report_resident("pwd");
        // $this->data['Senior']   = $resident->report_resident("senior");


        $resident->select("count(*) as cntRes,sum(if(living_status = 'RENTEE',1,0)) as rentee,sum(if(living_status = 'OWNER',1,0)) as owner,sum(if(card_resident_info_id is not NULL,1,0)) as voters");
        $resident->join("resident_id_card","card_resident_info_id = resident_info_id and card_type = 8","left");
        $this->data['resident'] = $resident->first();
        $this->data['street']   = $street->findAll();
        $this->data['blotter']  = $blotter->findAll();
        $this->data['incident'] = $incident->findAll();


        // $this->data['content']    = 'dashboard/sample';
        $this->data['content']    = 'dashboard/index';
        $this->data['javascript'] = 'dashboard/script';

        return view('template', $this->data);
    }

    public function resident_report($type = NULL)
    {
        $resident = model("App\Models\Resident_m",false);

        $this->data['list'] = $resident->report_resident($type);


        $this->data['body_print'] = 'residents/report';
        $this->data['print'] = 'template_print_with_header';
        $this->data['content']    = 'residents/report';
        $this->data['javascript'] = 'residents/script';

        return view('template', $this->data);

    }

    public function age()
    {
        $resident = model("App\Models\Resident_m",false);

        $now =date('Y-m-d');
        
        $resident->select("TIMESTAMPDIFF( year,bdate, '{$now}') as age,count(*) as cnt");
        $resident->groupBy("TIMESTAMPDIFF( year,bdate, '{$now}')");
        $all = $resident->findAll();

        $result = ['u5'=>0,'u14'=>0,'u24'=>0,'u59'=>0,'a60'=>0];

        $result = array(
            'u5'=>  array(
                        'label' => 'Under-5s',
                        'count' => 0,
                        'color' => '#b91d47'
                    ),
            'u14'=> array(
                        'label' => '5-14 Years',
                        'count' => 0,
                        'color' => '#00aba9'
                    ),
            'u24'=> array(
                        'label' => '15-24 Years',
                        'count' => 0,
                        'color' => '#2b5797'
                    ),
            'u59'=> array(
                        'label' => '25-59 Years',
                        'count' => 0,
                        'color' => '#e8c3b9'
                    ),
            'a60'=> array(
                        'label' => '60+ Years',
                        'count' => 0,
                        'color' => '#1e7145'
                    ),

        );

        foreach ($all as $key => $row) 
        {
            if ($row->age > 60) 
                $result['a60']['count'] += $row->cnt;
            elseif ($row->age < 60)
                $result['u59']['count'] += $row->cnt;
            elseif ($row->age < 25)
                $result['u24']['count'] += $row->cnt;
            elseif ($row->age < 15)
                $result['u14']['count'] += $row->cnt;
            elseif ($row->age < 6)
                $result['u5']['count'] += $row->cnt;

        }

        header("Content-Type: application/json");
        echo json_encode($result);
        exit();

    }

    public function gender()
    {
        $resident = model("App\Models\Resident_m",false);

        $now =date('Y-m-d');
        
        $resident->select("gender,count(*) as cnt");
        $resident->groupBy("gender");
        $all = $resident->findAll();

        $result = array(
            'male' =>  array(
                        'label' => 'MALE',
                        'count' => 0,
                        'color' => '#b91d47'
                    ),
            'female'=> array(
                        'label' => 'FEMALE',
                        'count' => 0,
                        'color' => '#00aba9'
                    )

        );

        foreach ($all as $key => $row) 
        {
            if (strtoupper($row->gender) == 'MALE') 
                $result['male']['count'] += $row->cnt;
            else
                $result['female']['count'] += $row->cnt;
        }

        header("Content-Type: application/json");
        echo json_encode($result);
        exit();
    }

    public function sector()
    {
        $resident = model("App\Models\Resident_m",false);

        $now =date('Y-m-d');

        // $sector = ['pwd','sp','senior'];

        // $result = ['pwd'=>0,'sp'=>0,'senior'=> 0];
        //str_pad(dechex(rand(0x000000, 0xFFFFFF)), 6, 0, STR_PAD_LEFT)

        // $result = array(
        //     'male' =>  array(
        //                 'label' => 'MALE',
        //                 'count' => 0,
        //                 'color' => '#b91d47'
        //             ),
        //     'female'=> array(
        //                 'label' => 'FEMALE',
        //                 'count' => 0,
        //                 'color' => '#00aba9'
        //             )

        // );

        $resident->select("status,count(*) as cnt");
        $resident->where("(status != 'OTHERS' and status is not NULL)");
        $resident->groupBy("status");
        $all = $resident->findAll();

        foreach ($all as $key => $row) 
        {
            $result[] = array(
                        'label' => $row->status,
                        'count' => $row->cnt,
                        'color' => '#'.str_pad(dechex(rand(0x000000, 0xFFFFFF)), 6, 0, STR_PAD_LEFT)
                     );
        }

        header("Content-Type: application/json");
        echo json_encode($result);
        exit();
    }

    public function street()
    {
        $street = model("App\Models\Street_m",false);

        $street->select("(Select count(*) from resident_info where street = street_desc and deleted_at is NULL) as cnt,street_desc");
        $streetList = $street->findAll();

        
        foreach ($streetList as $key => $row) 
        {
            $result[] = array(
                        'label' => $row->street_desc,
                        'count' => $row->cnt,
                        'color' => '#'.str_pad(dechex(rand(0x000000, 0xFFFFFF)), 6, 0, STR_PAD_LEFT)
                     );
        }

        header("Content-Type: application/json");
        echo json_encode($result);
        exit();
    }

    public function business()
    {
        $business = model("App\Models\Business_m",false);

        $business->select("business_type_ownership as type,count(*) as cnt");
        $business->groupBy('business_type_ownership');
        $businessData = $business->findAll();

        $result = ['sp'=>0,'p'=>0,'corp'=>0,'coop'=>0];

        foreach ($businessData as $key => $row) 
        {
            if ($row->type == "SOLE PROPRIETORSHIP") 
                $result['sp'] += $row->cnt;
            elseif ($row->type == "PARTNERSHIP")
                $result['p'] += $row->cnt;
            elseif ($row->type == "CORPORATION")
                $result['corp'] += $row->cnt;
            elseif ($row->type == "COOPERATIVE")
                $result['coop'] += $row->cnt;
            
        }

        header("Content-Type: application/json");
        echo json_encode($result);
        exit();
    }

    public function business_line()
    {
        $business = model("App\Models\Business_line_m",false);
        
        $business->select("(Select count(*) from business where business_line = business_line_id and business_deleted_at is NULL) as cnt,business_line_desc");
        $businessData = $business->findAll();

        $result = ['line'=>[],'count'=>[],'color'=>["#b91d47","#00aba9","#b91d47","#00aba9","#b91d47","#00aba9","#b91d47","#00aba9","#b91d47","#00aba9"]];

        foreach ($businessData as $key => $row) 
        {
            $result['line'][] = $row->business_line_desc;
            $result['count'][] = $row->cnt;
            
        }

        header("Content-Type: application/json");
        echo json_encode($result);
        exit();
    }

}
