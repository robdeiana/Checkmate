<?php

    include_once './view/createView.php';

    class guestController
    {
        public function __constructor()
        {
            
        }

        public function handler($cmd)
        {
            $view = new createView(); 
            $response = null; //output di un'operazione

            switch($cmd)
            {
               case 'home':
               {
                    $this->setHome($view);
                    break;
               }
               
               case 'signup':
               {
                   $this->setSignUp($view);
                   break;
               }
               
               case 'registrated':
               {
                   $this->setRegistrated($view);
                   break;
               }
               
               case 'logout':
               {
                  $this->setLogout($view);   
                  break;
               }
               
               case 'about':
               {
                  $this->setAbout($view);   
                  break;
               }
               
               case 'how':
               {
                  $this->setHow($view);   
                  break;
               }
               
               case 'market':
               {
                  $this->setMarket($view);   
                  break;
               }
               
               case 'errorNotLogged':
                   $this->setError($view, 'errorNotLogged');
               break;

                default:
                  $this->setError($view, 'errorNotFound');
                break;
            
            }            
        }

        public function setHome($view)
        {
            $view->setStartPage('./view/guest/startPage.php');
            require_once($view->getStartPage());
            $view->setHeader('./view/guest/header.php');
            require_once($view->getHeader());
            $view->setContent('./view/guest/home.php');
            require_once($view->getContent());
            $view->setFooter('./view/guest/footer.php');
            require_once($view->getFooter());
            $view->setEndPage('./view/guest/endPage.php');
            require_once($view->getEndPage());
        }
        
        public function setSignUp($view)
        {
            $view->setStartPage('./view/guest/startPage.php');
            require_once($view->getStartPage());
            $view->setHeader('./view/guest/header.php');
            require_once($view->getHeader());
            $view->setContent('./view/guest/signup.php');
            require_once($view->getContent());
            $view->setFooter('./view/guest/footer.php');
            require_once($view->getFooter());
            $view->setEndPage('./view/guest/endPage.php');
            require_once($view->getEndPage());
        }
        
        public function setRegistrated($view)
        {
            $view->setStartPage('./view/guest/startPage.php');
            require_once($view->getStartPage());
            $view->setHeader('./view/guest/header.php');
            require_once($view->getHeader());
            $view->setContent('./view/guest/registrated.php');
            require_once($view->getContent());
            $view->setFooter('./view/guest/footer.php');
            require_once($view->getFooter());
            $view->setEndPage('./view/guest/endPage.php');
            require_once($view->getEndPage());
        }
        
        public function setLogout($view)
        {
            $view->setStartPage('./view/guest/startPage.php');
            require_once($view->getStartPage());
            $view->setHeader('./view/guest/header.php');
            require_once($view->getHeader());
            $view->setContent('./view/guest/logout.php');
            require_once($view->getContent());
            $view->setFooter('./view/guest/footer.php');
            require_once($view->getFooter());
            $view->setEndPage('./view/guest/endPage.php');
            require_once($view->getEndPage());
        }
        
        public function setAbout($view)
        {
            $view->setStartPage('./view/guest/startPage.php');
            require_once($view->getStartPage());
            $view->setHeader('./view/guest/header.php');
            require_once($view->getHeader());
            $view->setContent('./view/guest/about.php');
            require_once($view->getContent());
            $view->setFooter('./view/guest/footer.php');
            require_once($view->getFooter());
            $view->setEndPage('./view/guest/endPage.php');
            require_once($view->getEndPage());
        }
        
        public function setHow($view)
        {
            $view->setStartPage('./view/guest/startPage.php');
            require_once($view->getStartPage());
            $view->setHeader('./view/guest/header.php');
            require_once($view->getHeader());
            $view->setContent('./view/guest/how.php');
            require_once($view->getContent());
            $view->setFooter('./view/guest/footer.php');
            require_once($view->getFooter());
            $view->setEndPage('./view/guest/endPage.php');
            require_once($view->getEndPage());
        }
        
        public function setMarket($view)
        {
            $view->setStartPage('./view/guest/startPage.php');
            require_once($view->getStartPage());
            $view->setHeader('./view/guest/header.php');
            require_once($view->getHeader());
            $view->setContent('./view/guest/market.php');
            require_once($view->getContent());
            $view->setFooter('./view/guest/footer.php');
            require_once($view->getFooter());
            $view->setEndPage('./view/guest/endPage.php');
            require_once($view->getEndPage());
        }
        
        public function setError($view, $error)
        {
            $view->setStartPage('./view/guest/startPage.php');
            require_once($view->getStartPage());
            $view->setHeader('./view/guest/header.php');
            require_once($view->getHeader());
            
            if ($error == 'errorNotLogged')
            {
                $view->setContent('./view/guest/errorNotLogged.php');
                require_once($view->getContent());
            }
            else if ($error == 'errorNotFound')
            {
                $view->setContent('./view/guest/errorNotFound.php');
                require_once($view->getContent());
            }
            
            $view->setFooter('./view/guest/footer.php');
            require_once($view->getFooter());
            $view->setEndPage('./view/guest/endPage.php');
            require_once($view->getEndPage());
        }
    }

?>
