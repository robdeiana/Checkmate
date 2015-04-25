<?php

    include_once './view/createView.php';
    include_once './model/userDB.php';
    include_once './model/itemDB.php';

    class userController
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
               
               case 'logout':
               {
                    $_SESSION['loggedIn'] = false;
                    $_SESSION['username'] = '';
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
            
                case 'not_found':
                 $this->setViewNotFound($view);
                break;

                default:
                  $this->setViewNotFound($view);
                break;       
            }
        }

        public function setHome($view)
        {
            $view->setStartPage('./view/user/startPage.php');
            require_once($view->getStartPage());
            $view->setHeader('./view/user/header.php');
            require_once($view->getHeader());
            $view->setContent('./view/user/home.php');
            require_once($view->getContent());
            $view->setFooter('./view/user/footer.php');
            require_once($view->getFooter());
            $view->setEndPage('./view/user/endPage.php');
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
            $view->setStartPage('./view/user/startPage.php');
            require_once($view->getStartPage());
            $view->setHeader('./view/user/header.php');
            require_once($view->getHeader());
            $view->setContent('./view/user/about.php');
            require_once($view->getContent());
            $view->setFooter('./view/user/footer.php');
            require_once($view->getFooter());
            $view->setEndPage('./view/user/endPage.php');
            require_once($view->getEndPage());
        }
        
        public function setHow($view)
        {
            $view->setStartPage('./view/user/startPage.php');
            require_once($view->getStartPage());
            $view->setHeader('./view/user/header.php');
            require_once($view->getHeader());
            $view->setContent('./view/user/how.php');
            require_once($view->getContent());
            $view->setFooter('./view/user/footer.php');
            require_once($view->getFooter());
            $view->setEndPage('./view/user/endPage.php');
            require_once($view->getEndPage());
        }
        
        public function setMarket($view)
        {
            $view->setStartPage('./view/user/startPage.php');
            require_once($view->getStartPage());
            $view->setHeader('./view/user/header.php');
            require_once($view->getHeader());
            $view->setContent('./view/user/market.php');
            require_once($view->getContent());
            $view->setFooter('./view/user/footer.php');
            require_once($view->getFooter());
            $view->setEndPage('./view/user/endPage.php');
            require_once($view->getEndPage());
            
            //echo "<img src = 'index.php?print=". 1 ."'>";
        }
        
        public function printImg($id)
        {
            $exist = itemDB::instance()->getItem((int)$id);
            $img = $exist['image'];
            
            header("Cache-Control: public");
            header("Content-Type: image/jpeg");
            header("Content-Disposition: attachment; filename=\"img.jpg\"");
            header("Content-Transfer-Encoding: binary");
            echo $img;
        }
        
        public function setError($view, $error)
        {
            $view->setStartPage('./view/user/startPage.php');
            require_once($view->getStartPage());
            $view->setHeader('./view/user/header.php');
            require_once($view->getHeader());
            
            // Error content
            
            $view->setFooter('./view/user/footer.php');
            require_once($view->getFooter());
            $view->setEndPage('./view/user/endPage.php');
            require_once($view->getEndPage());
        }
        
        public function login()
        {
            $exist = userDB::instance()->existUser($_POST['username'], $_POST['password']);

            if($exist)
            {
                 $_SESSION["loggedIn"] = true;
                 $_SESSION["username"] = $_POST['username'];
                 unset($_POST['username']);
                 unset($_POST['password']);
                 return true;
            }
            
            return false;
        }
        
        public function signUp()
        {
            $user = new user();            

            if ($this->checkFields() && $_POST['password'] == $_POST['confirm'])
            {
                $user->setEmail($_POST['email']);
                $user->setUsername($_POST['username']);
                $user->setPassword($_POST['password']);
                $user->setSurname($_POST['surname']);
                $user->setName($_POST['name']);
                $user->setSurname($_POST['surname']);
                $user->setStreet($_POST['street']);
                $user->setNumber($_POST['number']);
                $user->setCity($_POST['city']);
                $user->setPostalCode($_POST['postalCode']);
                $user->setState($_POST['state']);
            }
            else
                return false;
            
            if(userDB::instance()->insert($user))
                    return true;
            else
                return false;
        }
        
        public function checkFields()
        {                
               return 
                    isset($_POST['email']) && 
                    isset($_POST['username']) &&
                    isset($_POST['password']) && 
                    isset($_POST['confirm']) && 
                    isset($_POST['confirm']) && 
                    isset($_POST['name']) && 
                    isset($_POST['surname']) && 
                    isset($_POST['street']) && 
                    isset($_POST['number']) && 
                    isset($_POST['city']) && 
                    isset($_POST['postalCode']) && 
                    isset($_POST['state']);
        }
    }

?>
