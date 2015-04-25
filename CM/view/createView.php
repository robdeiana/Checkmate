<?php

    class CreateView
    {
        private $startPage;
        private $header;
        private $content;
        private $footer;
        private $endPage;

        public function __construct()
        {
            
        }        
 
        public function getStartPage()
        {
            return $this->startPage;
        }
        
        public function setStartPage($startPage)
        {
            $this->startPage = $startPage;
        }
        
        public function getHeader()
        {
            return $this->header;
        }

        public function setHeader($header)
        {
            $this->header = $header;
        }

        public function getContent()
        {
            return $this->content;
        }

        public function setContent($content)
        {
            $this->content = $content;
        }

        public function getFooter()
        {
            return $this->footer;
        }

        public function setFooter($footer)
        {
            $this->footer = $footer;
        }
        
        public function getEndPage()
        {
            return $this->endPage;
        }

        public function setEndPage($endPage)
        {
            $this->endPage = $endPage;
        }
    }
    
?>
