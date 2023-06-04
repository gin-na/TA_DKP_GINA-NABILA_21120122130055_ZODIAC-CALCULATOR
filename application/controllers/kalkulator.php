<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kalkulator extends CI_Controller {

    public function index() {
        $this->load->view('halaman_utama');
    }

    public function hasil() {
        $birthdate1 = $this->input->post('birthdate1');
        $birthdate2 = $this->input->post('birthdate2');

        $zodiac1 = $this->getZodiac($birthdate1);
        $zodiac2 = $this->getZodiac($birthdate2);

        $compatibility = $this->calculateCompatibility($zodiac1, $zodiac2);

        $data['zodiac1'] = $zodiac1;
        $data['zodiac2'] = $zodiac2;
        $data['compatibility'] = $compatibility;

        $this->load->view('hasil_kal', $data);
    }

    private function getZodiac($birthdate) {
        $birthdate = date('Y-m-d', strtotime($birthdate));
        $month = (int)date('m', strtotime($birthdate));
        $day = (int)date('d', strtotime($birthdate));

        if (($month == 3 && $day >= 21) || ($month == 4 && $day <= 19)) {
            return 'Aries';
        } elseif (($month == 4 && $day >= 20) || ($month == 5 && $day <= 20)) {
            return 'Taurus';
        } elseif (($month == 5 && $day >= 21) || ($month == 6 && $day <= 20)) {
            return 'Gemini';
        } elseif (($month == 6 && $day >= 21) || ($month == 7 && $day <= 22)) {
            return 'Cancer';
        } elseif (($month == 7 && $day >= 23) || ($month == 8 && $day <= 22)) {
            return 'Leo';
        } elseif (($month == 8 && $day >= 23) || ($month == 9 && $day <= 22)) {
            return 'Virgo';
        } elseif (($month == 9 && $day >= 23) || ($month == 10 && $day <= 22)) {
            return 'Libra';
        } elseif (($month == 10 && $day >= 23) || ($month == 11 && $day <= 21)) {
            return 'Scorpio';
        } elseif (($month == 11 && $day >= 22) || ($month == 12 && $day <= 21)) {
            return 'Sagittarius';
        } elseif (($month == 12 && $day >= 22) || ($month == 1 && $day <= 19)) {
            return 'Capricorn';
        } elseif (($month == 1 && $day >= 20) || ($month == 2 && $day <= 18)) {
            return 'Aquarius';
        } elseif (($month == 2 && $day >= 19) || ($month == 3 && $day <= 20)) {
            return 'Pisces';
        }

        return 'Unknown';
    }

    private function calculateCompatibility($zodiac1, $zodiac2) {
        $compatibility = rand(20, 99);
        return $compatibility;
    }
}
