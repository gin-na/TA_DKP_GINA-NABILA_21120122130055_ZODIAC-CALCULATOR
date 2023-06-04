<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Zodiac extends CI_Controller {
    public function index()
    {
        $this->load->view('halaman_utama');
    }

    function tampil_data_satu(){
		$this->load->view('satu');
	}
    

    public function determineZodiac() {
        $dateOfBirth = $this->input->post('dob');
        $name = $this->input->post('name');

        $zodiac = $this->getZodiacSignByDate($dateOfBirth);

        $data = array(
            'name' => $name,
            'zodiac' => $zodiac
        );

        $this->load->view('dua', $data);
    }

    private function getZodiacSignByDate($dateOfBirth) {
        $zodiacSigns = array(
            array('name' => 'Aquarius', 'start' => '01-20', 'end' => '02-18', 'image' => 'aquarius.png'),
            array('name' => 'Pisces', 'start' => '02-19', 'end' => '03-20', 'image' => 'pisces.png'),
            array('name' => 'Aries', 'start' => '03-21', 'end' => '04-19', 'image' => 'aries.png'),
            array('name' => 'Taurus', 'start' => '04-20', 'end' => '05-20', 'image' => 'taurus.png'),
            array('name' => 'Gemini', 'start' => '05-21', 'end' => '06-20', 'image' => 'gemini.png'),
            array('name' => 'Cancer', 'start' => '06-21', 'end' => '07-22', 'image' => 'cancer.png'),
            array('name' => 'Leo', 'start' => '07-23', 'end' => '08-22', 'image' => 'leo.png'),
            array('name' => 'Virgo', 'start' => '08-23', 'end' => '09-22', 'image' => 'virgo.png'),
            array('name' => 'Libra', 'start' => '09-23', 'end' => '10-22', 'image' => 'libra.png'),
            array('name' => 'Scorpio', 'start' => '10-23', 'end' => '11-21', 'image' => 'scorpio.png'),
            array('name' => 'Sagittarius', 'start' => '11-22', 'end' => '12-21', 'image' => 'sagittarius.png'),
            array('name' => 'Capricorn', 'start' => '12-22', 'end' => '01-19', 'image' => 'capricorn.png')
        );

        $zodiac = 'Unknown';

        $dateParts = explode('-', $dateOfBirth);
        $month = (int) $dateParts[1];
        $day = (int) $dateParts[2];
        $monthDay = sprintf('%02d-%02d', $month, $day);

        foreach ($zodiacSigns as $sign) {
            $start = $sign['start'];
            $end = $sign['end'];

            if (($monthDay >= $start && $monthDay <= $end) || ($start > $end && ($monthDay >= $start || $monthDay <= $end))) {
                $zodiac = $sign;
                break;
            }
        }

        return $zodiac;
    }
}
