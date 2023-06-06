<?php

namespace App\Controllers;

class Certificate extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->data['title_page'] = 'CERTIFICATE';
        $this->data['certBusiness'] = FALSE;
    }

    public function index()
    {
        $requestCert = model("App\Models\Request_certificates_m",false);
        $this->data['requestCert'] = $requestCert->get();
        $this->data['content'] = 'certificate/index';
        return view('template', $this->data);
    }
    
    public function add()
    {
        $civil_status = model("App\Models\Civil_status_m",false);
        $certificates = model("App\Models\Certificates_m",false);
        $names        = model("App\Models\Resident_m",false);
        $streets      = model("App\Models\Street_m",false);
        
        $this->data['streets']      = $streets->dropdown();
        $this->data['civil_status'] = $civil_status->dropdown();
        $this->data['certificates'] = $certificates->dropdown();
        $this->data['names']        = $names->get_resident_selectize();
        $this->data['javascript']   = 'certificate/script';
        $this->data['cert_form']    = 'certificate/index';
        $this->data['content']      = 'certificate/add_certificate';
        return view('template', $this->data);
    }
    

    public function save()
    {
        $request_certificates = model("App\Models\Request_certificates_m",false);
        $post = $this->request->getPost();
        // var_dump($post);
        // var_dump($request_certificates->save($post));
		$request_certificates->save($post);
        $request_cert_id = $request_certificates->getInsertID();
        // return redirect()->to('/certificate/view/'.$request_cert_id); 
		echo json_encode(["error" => FALSE, "redirect" => base_url("certificate/view/{$request_cert_id}")]);	
    }

    public function view($id = NULL)
    {
        $requestCert = model("App\Models\Request_certificates_m",false);
        $requestCertInfo = $requestCert->get_data($id);
        // var_dump($requestCertInfo);
        $this->data['content'] = 'certificate/view_certificate';
        $this->data['print']   = 'certificate/temp_with_header';
        $this->data['captain'] = 'PEDRO DELA CRUZ';

        foreach ($requestCertInfo as $key[0] => $row) {
            $this->data['cert_body']   = $row->certificates_body;
        
            $this->data['ceritficate_type'] = $row->certificates_desc;
            $this->data['name']             = $row->name;
            $this->data['company_name']     = $row->name;
            $this->data['located_address']  = $row->located_address;
            $this->data['issued']           = $row->issued;
            if (in_array($row->certificates_id,[2]))
            {
                $this->data['purpose']          = $row->purpose;
                $this->data['date_from']        = $row->date_from;
                $this->data['date_to']          = $row->date_to;
                $this->data['ornum']            = $row->ornum;
                $this->data['amount']           = $row->amount;
            }
            else
            {
                $this->data['age']              = $row->age;
                $this->data['civil_status']     = $row->civil_status_desc;

            }
            
        }
        // $this->data['cert_body']   = $requestCertInfo->certificates_body;
        
        
        // $this->data['ceritficate_type']   = $requestCertInfo->certificates_desc;
        // // $this->data['bc_no_ect']        = '2023-02020202';
        // $this->data['name']             = $requestCertInfo->name;
        // $this->data['company_name']     = $requestCertInfo->name;
        // $this->data['located_address']  = $requestCertInfo->located_address;
        // $this->data['barangay_address'] = $requestCertInfo->located_address;
        // // $this->data['purpose']          = $requestCertInfo->purpose;
        // $this->data['age']              = $requestCertInfo->age;
        // $this->data['civil_status']     = $requestCertInfo->civil_status_desc;
        // // $this->data['citizenship']      = 'AMERICAN';
        // // $this->data['date_from']        = 'January 21, 2021';
        // // $this->data['date_to']          = 'January 29, 2021';
        // $this->data['issued']           = $requestCertInfo->issued;
        // $this->data['date_applied']     = $requestCertInfo->issued;
        // // $this->data['ornum']            = 'MKT 9055145';
        // // $this->data['amount']           = '500.00';
        
  

        return view('template', $this->data);
    }

}
