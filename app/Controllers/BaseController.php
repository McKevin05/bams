<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;
use Config\CustomConfig;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = [];

    protected $exclude_uri = ['site'];
    /**
     * Constructor.
     */

    public function __construct()
    {
        $CustomConfig = new CustomConfig;

       
        $this->data['javascript'] = "";
        $this->data['login']      = FALSE;
        $this->data['logo']       = base_url().$CustomConfig->logo;
        $this->data['bams_logo']  = base_url().$CustomConfig->bams_logo;
        $this->data['name']       = $CustomConfig->name;
        $this->data['site_title'] = $CustomConfig->site_title;
        $this->data['captain']    = 'HAZEL ANN S. LACIA';

        helper(['url','form','my']);


    }

    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.
        $this->session = \Config\Services::session();

        $userData = $this->session->get();
        // $uri = $this->request->uri->getSegment(1);
        // var_dump($userData);
        // if (!isset($userData['is_login'])) 
        // {
        //     var_dump($this->exclude_uri);
        //     if (!in_array($uri,$this->exclude_uri)) 
        //       return  redirect()->to("site");
        // }
        // // $this->data['sidebar_admin'] = FALSE;



        // E.g.: $this->session = \Config\Services::session();
    }
}
