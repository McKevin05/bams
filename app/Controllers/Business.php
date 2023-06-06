<?php

namespace App\Controllers;

class Business extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->data['title_page'] = 'BUSINESS';
        $this->data['status']     = array(
                                        "<span class='badge text-bg-danger'>Inactive</span>",
                                        "<span class='badge text-bg-success'>Active</span>",
                                        "<span class='badge text-bg-success'>Dispose</span>",
                                    );
    }

    public function getIndex()
    {
        $business = model("App\Models\Business_m",false);

        $this->data['list']    = $business->get_data();
        $this->data['content'] = 'business/index';
        return view('template', $this->data);
    }

    public function getAdd()
    {
        $line_business  = model("App\Models\Business_line_m",false);
        $street         = model("App\Models\Street_m",false);
        
        if ($this->request->getMethod()=="post") 
        {
            $business = model("App\Models\Business_m",false);

            $data = $this->request->getPost();

            // // $rules = $this->gender->validationRules;
            // $rules = $resident->validationRules;

            // if (!$this->validate($rules)) 
            // {
            //     $errors = $this->validator->listErrors();
            // }
            // else
            // {
                $insert = $business->save($data);
            // }
            // var_dump($data);
        }
        $this->data['street']        = $street->dropdown();
        $this->data['line_business'] = $line_business->dropdown();
        $this->data['content']       = 'business/add_business';
        $this->data['javascript']    = 'business/script';
        return view('template', $this->data);
    }
    

    public function getView($id = NULL)
    {
        $business       = model("App\Models\Business_m",false);
        $business_other = model("App\Models\Business_other_details_m",false);

        $businessPermit    = $business->get_data($id);
        $businessClearance = $business_other->where('business_other_business_id', $id)->orderBy('business_other_created_at', 'DESC')->findAll();

        $this->data['certBusiness']  = TRUE;
        $this->data['business']      = $businessPermit;
        $this->data['clearance']     = $businessClearance;
        $this->data['content']       = 'business/view_business';
        $this->data['javascript']    = 'business/script';
     
        return view('template', $this->data);
    }

    
    public function getTaxMapping()
    {
        $business       = model("App\Models\Business_m",false);
        $business_other = model("App\Models\Business_other_details_m",false);

        $this->data['list']    = $business_other->list();
        $this->data['content'] = 'business/tax_mapping';

        $this->data['javascript'] = 'business/script';
        return view('template', $this->data);
    }

    public function getViewTaxMapping($id = NULL)
    {
        $business = model("App\Models\Business_m",false);

        // $this->data['business'] = $business->find($id);
        $businessPermit              = $business->get_data($id);
        $this->data['business']      = $businessPermit;
        $this->data['certBusiness']  = TRUE;
        $this->data['content']       = 'business/view_business';
        $this->data['print']         = 'certificate/temp_with_header';
        $this->data['captain']       = 'PEDRO DELA CRUZ';

        
        $this->data['cert_title']       = 'BARANGAY BUSINESS CLEARANCE';
        $this->data['cert_body']        = 'business/business_clearance_with_penalties';
        $this->data['ceritficate_type'] = 'BUSINESS CLEARANCE';
        
        $this->data['bc_no_ect']        = $businessPermit->business_id;
        $this->data['name']             = $businessPermit->business_owner;
        $this->data['company_name']     = $businessPermit->business_name;
        $this->data['address']          = $businessPermit->business_address_house_no." ".$businessPermit->street_desc." ".$businessPermit->business_address_barangay." ".$businessPermit->business_address_city;
        $this->data['issued']           = $businessPermit->business_date_applied;
        $this->data['purpose']          = $businessPermit->business_line_desc;
        $this->data['remarks']          = !empty($businessPermit->business_plate_no)?'Business Plate No. '.$businessPermit->business_plate_no:"";
            // $this->data['date_from']        = $businesPermit->date_from;
            // $this->data['date_to']          = $businesPermit->date_to;
            // $this->data['ornum']            = $businesPermit->ornum;
            // $this->data['amount']           = $businesPermit->amount;

      

        return view('template', $this->data);
    }

    public function update()
    {
        $business = model("App\Models\Business_m",false);

        $data = $this->request->getPost();

        $business->save($data);

        return redirect()->to('business/view/'.$data['business_id']);
    }

    public function update_tax_mapping()
    {
        $business_other = model("App\Models\Business_other_details_m",false);

        $data = $this->request->getPost();

        var_dump($data);

        $business_other->save($data);

        return redirect()->to('business/tax_mapping/');
    }

    public function save_clearance()
    {
        $business_other = model("App\Models\Business_other_details_m",false);

        $data = $this->request->getPost();

        $data['business_clearance_no'] = $business_other->create_code();
        // var_dump($data);
        $business_other->updateInactive($data['business_other_business_id']);
        $business_other->save($data);

        return redirect()->to('business/view/'.$data['business_other_business_id']);
    }

    public function print_clearance($id=NULL)
    {
        $business_other = model("App\Models\Business_other_details_m",false);

        $businessPermit = $business_other->get($id);

        $this->data['certBusiness']  = TRUE;
        $this->data['captain']       = 'PEDRO DELA CRUZ';

        $this->data['cert_title']       = 'BARANGAY BUSINESS CLEARANCE';
        $this->data['cert_body']        = 'business/business_clearance_with_penalties';
        $this->data['ceritficate_type'] = 'BUSINESS CLEARANCE';
        
        $this->data['bc_no_ect']        = $businessPermit->business_clearance_no;
        $this->data['name']             = $businessPermit->business_owner;
        $this->data['company_name']     = $businessPermit->business_name;
        $this->data['address']          = $businessPermit->business_address_house_no." ".$businessPermit->street_desc." ".$businessPermit->business_address_barangay." ".$businessPermit->business_address_city;
        $this->data['issued']           = $businessPermit->business_date_applied;
        $this->data['purpose']          = $businessPermit->business_line_desc;
        $this->data['remarks']          = !empty($businessPermit->business_plate_no)?'Business Plate No. '.$businessPermit->business_plate_no:"";

        $html =  view('certificate/temp_with_header', $this->data);

        echo json_encode(['html' => $html]);
    }
}
