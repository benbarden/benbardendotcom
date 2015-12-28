<?php
    class MusicTrack
    {
        private $title;
        private $link;
        private $duration;
        public function getTitle() {return $this->title;}
        public function getLink() {return $this->link;}
        public function getDuration() {return $this->duration;}
        public function setTitle($title) {$this->title = $title; return $this;}
        public function setLink($link) {$this->link = $link; return $this;}
        public function setDuration($duration) {$this->duration = $duration; return $this;}
    }
    $tracksDatabase = array();
    $classicCaseOfChaos = new MusicTrack();
    $classicCaseOfChaos->setTitle('Classic Case of Chaos')
                       ->setDuration('04:24')
                       ->setLink('http://coda.city/downloads/ben-barden-music/parallel-paths-2/04. Classic Case of Chaos.mp3');
    $tracksDatabase['classic-case-of-chaos'] = $classicCaseOfChaos;
