<?php
class Pages extends CI_Controller {

       public function view($page = 'home')
       {
        if(!file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
            //Whoops,wedon'thaveapageforthat!
            show_404();
        }
        
        $data['title']=ucfirst($page);//Capitalizethefirstletter
        
        $this‐>load‐>view('templates/header',$data);
        $this‐>load‐>view('pages/'.$page,$data);
        $this‐>load‐>view('templates/footer',$data);
         
       }
}