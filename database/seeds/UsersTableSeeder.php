<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Clive Makamara',
                'email' => 'cmosh@live.com',
                'password' => '$2y$10$3wc96VTjfoGyo1lGJN0gHus80634I1AY9E2kcdsaxIddKJGO3nDVS',
                'county' => '',
                'PhoneNumber' => '',
                'IDNumber' => '',
                'status' => 1,
                'role' => 4,
                'remember_token' => 'kWeM5WinsuqsVY9Zc205XXJjz27RU584CV7my2P3fQYNjNm5b4pdPhGtek9E',
                'created_at' => '2015-07-14 11:38:59',
                'updated_at' => '2015-12-23 22:00:56',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'James Koech',
                'email' => 'jkoech@dhd.com',
                'password' => '$2y$10$9tFTtyqpx4kiIZmqoGGe.e262NjpFR1AAJqCoab6fEGWjnIuDK9pm',
                'county' => '',
                'PhoneNumber' => '',
                'IDNumber' => '',
                'status' => 1,
                'role' => 1,
                'remember_token' => '1diVoq6k9RT6AA0RSfweWCGk1cyhjipSH7ttUiGhXPCAImt4hPFBqlrpjBqn',
                'created_at' => '2015-07-15 03:13:27',
                'updated_at' => '2015-07-15 03:25:42',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Henry Koech',
                'email' => 'cmosh0@live.com',
                'password' => '$2y$10$A80u5wf/m3M22ejDJcSi0OEEQv.ItS9EQEh/jo5S5F01ig1mu.UWi',
                'county' => 'Kisii',
                'PhoneNumber' => '0770043909',
                'IDNumber' => '123647',
                'status' => 1,
                'role' => 1,
                'remember_token' => 'vzk2fEyY1xlHI7wGSJVPJzrVjlQzxyar8Zyp8Rq1miC4wNhyMm7AKgksncym',
                'created_at' => '2015-07-15 18:05:43',
                'updated_at' => '2015-10-05 07:09:39',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Demo User',
                'email' => 'user@mnch.com',
                'password' => '$2y$10$Y/CcpQq.nOKHxjxXp6gPH.a8mymJ4Sp.wzryosX70BBHktuBpMR0O',
                'county' => 'Nairobi',
                'PhoneNumber' => '072727272',
                'IDNumber' => '2222221',
                'status' => 1,
                'role' => 3,
                'remember_token' => 'GbdsawlNflaI6EKGYrltnTkw9fYjeI1ArIGtaXUIyJ9nILXKp9UPVeu1zPME',
                'created_at' => '2015-07-25 08:47:19',
                'updated_at' => '2016-01-06 16:48:48',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Gift Kiti',
                'email' => 'gkiti@bates.com',
                'password' => '$2y$10$hr1XRKi7tloxyEZVii3.cOvFOxvlgR7AgBAWqo6HhCso8Ag/s.T.6',
                'county' => 'Samburu',
                'PhoneNumber' => '0724230649',
                'IDNumber' => '32045150',
                'status' => 1,
                'role' => 1,
                'remember_token' => '5DqnuynEapcxoe02ggWDI0cpO5h6q595TXbJGtcWQDTdvEZNxtdh2g8V6GDW',
                'created_at' => '2015-08-10 07:10:36',
                'updated_at' => '2015-08-19 07:55:44',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Nicole Mwaura',
                'email' => 'nikkimwaura@gmail.com',
                'password' => '$2y$10$Zb3/iQnE1.82QV6ecNiNKu/16DEuUtu7c9jXWQ6axBh7PeklHxdzq',
                'county' => 'Samburu',
                'PhoneNumber' => '0713395856',
                'IDNumber' => '496857871',
                'status' => 1,
                'role' => 1,
                'remember_token' => 'akiLBR7KqdNWUtsgaGqd6HAbKJ7qgQzd5HwrzG13pvnSoqXjnga5YNT4fWUH',
                'created_at' => '2015-08-10 07:11:56',
                'updated_at' => '2015-08-19 09:07:17',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Betty Wariari',
                'email' => 'bwariari@clintonhealthaccess.org',
                'password' => '$2y$10$hDFGuH2KgJPSSZA9hC79ueTZjiA1AmGJ5pWggXtwkD3IaGfvrcsBa',
                'county' => 'Machakos',
                'PhoneNumber' => '0726619111',
                'IDNumber' => 'Not Available',
                'status' => 1,
                'role' => 3,
                'remember_token' => 'K8JbV369arcreJvxR6Z7cUdsKGVKvFEG2dhTUftIw4ZsVOkghQ6SQXC0Z0UD',
                'created_at' => '2015-08-13 17:56:50',
                'updated_at' => '2015-10-26 13:24:34',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Collins Cheruiyot',
                'email' => 'ccheruiyot@clintonhealthaccess.org',
                'password' => '$2y$10$Zzf8Ld.aOVijxlWr6dm5h.ponUVmPDE6pguFH4cxGy58xLoSWeA5G',
                'county' => 'Machakos',
                'PhoneNumber' => '0706112299',
                'IDNumber' => 'Not Given',
                'status' => 1,
                'role' => 3,
                'remember_token' => 'ZvdLHPvHXwUxF8nK5UweLXPXeECYztdz02PJa0K2uD9KVWKjDYbR7dSDWb5q',
                'created_at' => '2015-08-13 18:00:11',
                'updated_at' => '2015-08-13 18:00:23',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Brian Mokaya',
                'email' => 'bmmokaya@gmail.com',
                'password' => '$2y$10$913MyrBHYRcLJvG97D0BfOkUnVhqgMsp3WSddDvH8uT1d/4c0.ZgO',
                'county' => 'Machakos',
                'PhoneNumber' => '0715657787',
                'IDNumber' => 'Not Availed',
                'status' => 1,
                'role' => 3,
                'remember_token' => '2FiIS4DJtFIRFnBloy7lOhkkvQvNhGg7pvBCXiPvTddRw0gO40sNigsU5Pto',
                'created_at' => '2015-08-13 18:02:28',
                'updated_at' => '2015-10-27 05:29:00',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Jane Rose',
                'email' => 'jaynerawz@gmail.com',
                'password' => '$2y$10$cvqbDCSsOTgI05s6CGcNjeWu7.UG5gbjPknz6Up7zLLxBM2KyoBRK',
                'county' => 'Machakos',
                'PhoneNumber' => '0700544070',
                'IDNumber' => 'N/A',
                'status' => 1,
                'role' => 3,
                'remember_token' => 'ZCV97fnOAhQsggLzw3Q0C1AyCcclexygZYPDPp8wbVBNbggQQKqRuOymDozW',
                'created_at' => '2015-08-13 18:04:36',
                'updated_at' => '2015-08-13 18:04:44',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Sheila Mutheu',
                'email' => 'smutheu@clintonhealthaccess.org',
                'password' => '$2y$10$FoDXDtR8Ih45PrfgTtat4OnlDXqjNT8ejvzNnERMBBZa3zY3F22LW',
                'county' => 'Machakos',
                'PhoneNumber' => '0726416795',
                'IDNumber' => 'Non Existent',
                'status' => 1,
                'role' => 3,
                'remember_token' => 'OCbOugKSeqP2IuxwHuionvirK2zifv9N5UAhkz2F5IAGBXHyGtWUuwBnvask',
                'created_at' => '2015-08-13 18:06:59',
                'updated_at' => '2015-10-13 11:19:19',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Rosemary Kihoto',
                'email' => 'rkihoto@clintonhealthaccess.org',
                'password' => '$2y$10$rzD9WeJoCwMYPyvYx.r1J.6yw1Cmb40x1xZe.oUKPeTKISfapR6Wa',
                'county' => 'Machakos',
                'PhoneNumber' => '0',
                'IDNumber' => '0',
                'status' => 1,
                'role' => 1,
                'remember_token' => 'qqfLoipvNw0fnHmRAVy67KmRcAFP4m5NDy30sJ2azaauRDkuDcpjvoboqWj7',
                'created_at' => '2015-08-14 08:22:11',
                'updated_at' => '2015-09-10 11:07:04',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'David Livingston',
                'email' => 'stone.openda@yahoo.com',
                'password' => '$2y$10$esP6NhCkxnmpFw9cJJDkCO/jmPf1QWbyT0PvU0h36UfQjYv7CD3OK',
                'county' => 'Nairobi',
                'PhoneNumber' => '+254 719 637 075',
                'IDNumber' => 'unavailed',
                'status' => 1,
                'role' => 1,
                'remember_token' => 'zSMp8TYptrxN65c6ET8v4lPZ6jrvtGKh2yrxZYZlbWqUy0oNDmozHsF3UPEp',
                'created_at' => '2015-08-25 20:09:27',
                'updated_at' => '2015-09-03 13:48:12',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Derrick David Njiru',
                'email' => 'daviddwien@gmail.com',
                'password' => '$2y$10$dQSGMT4L3ofAxB9sbsXh6OT0DAaLYWuDEYsHnQQwJeXkvgWaxm7p.',
                'county' => 'Nairobi',
                'PhoneNumber' => '0713 642 756',
                'IDNumber' => 'not there',
                'status' => 1,
                'role' => 1,
                'remember_token' => '5QXBv8Qs0qGwUi6nmchvFSVvHN0on8d2UapUDeeTJ0AEF7byeflAw1ne9XB3',
                'created_at' => '2015-08-25 20:11:30',
                'updated_at' => '2015-08-26 14:25:57',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Elisha Ochang',
                'email' => 'elisha.ochang@strathmore.edu',
                'password' => '$2y$10$m7Un9OfjJK.bk8H8nTV/qeuoNQPZKzORmGe7yJawGaG8jzufjloyG',
                'county' => 'Nairobi',
                'PhoneNumber' => '0708 725 928',
                'IDNumber' => 'none given',
                'status' => 1,
                'role' => 1,
                'remember_token' => 'yKUZrJz161F5OTk2BoV80QDCYD8VfbboTUUDJg28gNRqz7DLq3VC73kfvTUF',
                'created_at' => '2015-08-25 20:13:35',
                'updated_at' => '2015-08-25 20:13:45',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Job Maithia Maina',
                'email' => 'Jmbuthiam@gmail.com',
                'password' => '$2y$10$VEIGbnn/qepZPhvH1.3YmOFA4L8QUsRFFppsHjrsO7XH64CFjK3M2',
                'county' => 'Nairobi',
                'PhoneNumber' => '0722 820 145',
                'IDNumber' => 'none availed',
                'status' => 1,
                'role' => 1,
                'remember_token' => 'oQElgQxRhmQ7cTZ3ncUwP7p5AUKiZhgyEqJNmPTbdXcOpQhAB0Zlvey6Ioh6',
                'created_at' => '2015-08-25 20:16:08',
                'updated_at' => '2015-10-27 10:11:00',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Peter Evans Ngare',
                'email' => 'ivunz75@gmail.com',
                'password' => '$2y$10$/2XF.K5PRBrz4OzK6YSoXOgFVdY2hGOlwT1hpNsiW2Z/VE32U24aW',
                'county' => 'Nairobi',
                'PhoneNumber' => '0723 964 832',
                'IDNumber' => 'present later',
                'status' => 1,
                'role' => 1,
                'remember_token' => 'AaJcjRsUnF2YGWPruD6nfjWbkE0CHDeaJTswvYJkP6nclN1oMGo89rRaNUGW',
                'created_at' => '2015-08-25 20:20:50',
                'updated_at' => '2015-10-26 10:52:07',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Ruth Muthoni Ndegwa',
                'email' => 'rmuthonindegwa@gmail.com',
                'password' => '$2y$10$McYU7ej3mf94KzgXGm5FL.RqRLoozvdUfCd9ZSwTsVT3Cws2a.2DW',
                'county' => 'Nairobi',
                'PhoneNumber' => '0724 426 900',
                'IDNumber' => 'not granted',
                'status' => 1,
                'role' => 1,
                'remember_token' => 'omSzRNXAbdN04ntt11i3nimVVAKRhBhFliT5XGbMguyUkHzBHAIn2qIM2QOK',
                'created_at' => '2015-08-25 20:28:17',
                'updated_at' => '2015-08-25 20:28:28',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Thomas Macharia Nyambura',
                'email' => 'thomas.nyambura@strathmore.edu',
                'password' => '$2y$10$zSmhVoCJxgKlsspavurANeM2ORzkRKFGX/OvTqNg4zMV.UuhkPsNe',
                'county' => 'Nairobi',
                'PhoneNumber' => '0716 172 454',
                'IDNumber' => 'none provided',
                'status' => 1,
                'role' => 1,
                'remember_token' => 'kd2diaT3qsvONXgwarh85QIijlIHAfQHbqamyGK9BhmZdBWj8Xb6auBkJhJr',
                'created_at' => '2015-08-25 20:33:27',
                'updated_at' => '2015-09-03 13:58:43',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Eddie Kago',
                'email' => 'eddiekago@gmail.com',
                'password' => '$2y$10$eyNJpAFrqKYREVR4SwSYvOewWuIS.bMfm56keT885sg5iq8gcefeq',
                'county' => 'Nairobi',
                'PhoneNumber' => '0725117800',
                'IDNumber' => '1111',
                'status' => 1,
                'role' => 1,
                'remember_token' => '0Ws6mBfM5Zor7EiV8aFwLB5UjQNUeyHejwUxcAKwAyUEPJAicQ91oyoBpwdu',
                'created_at' => '2015-08-26 04:34:43',
                'updated_at' => '2015-10-19 14:26:18',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Cynthia Ndivo',
                'email' => 'ndivocyn@gmail.com',
                'password' => '$2y$10$juvuVOVwWoI9x2iv7WsoYe1Cqf/IGwsYV.A.4PgRqT146EnRlIIz2',
                'county' => 'Nairobi',
                'PhoneNumber' => '0705046121',
                'IDNumber' => '31707809',
                'status' => 1,
                'role' => 1,
                'remember_token' => 'IJ1I90TgAd1f25sKgbfSYYJO0W1pKWiPGt7fi4cjwJ9NtDlyhj6fxACDKoz3',
                'created_at' => '2015-08-31 06:49:20',
                'updated_at' => '2015-10-22 06:23:16',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Glen Iningu',
                'email' => 'giningu@gmail.com',
                'password' => '$2y$10$9rj.jLbM5by0EWO1U4IRqeixze36QT9vnjERtkEFP7/G9zdkygWDS',
                'county' => 'Nairobi',
                'PhoneNumber' => '0714645215',
                'IDNumber' => '32006656',
                'status' => 1,
                'role' => 1,
                'remember_token' => 'XkMtEXsr6nzaH59MWPCEcCCRxFKfBBCcOL67VyscdeFuVCNEah6pRqjod5is',
                'created_at' => '2015-08-31 06:50:56',
                'updated_at' => '2015-08-31 06:50:59',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Jimmy Karu',
                'email' => 'jimmykaru.karu@gmail.com',
                'password' => '$2y$10$mS4rEfveR6kE3GXQz5VofOS6xI414M7pNgpKh4E0TfNfvovw5PZky',
                'county' => 'Nairobi',
                'PhoneNumber' => '0722532127',
                'IDNumber' => '28512214',
                'status' => 1,
                'role' => 1,
                'remember_token' => 'utO3Kiqsgm2PUyE2oMZbUd5KsS9WABm7ur6JWiKKc4umSknDFvOgzbYOjT6Z',
                'created_at' => '2015-08-31 06:52:16',
                'updated_at' => '2015-10-27 11:10:10',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Mary Musau',
                'email' => 'mary.saumu@gmail.com',
                'password' => '$2y$10$41lJ8oEEWZo/gH4SJJ.Qa.GQKjBdFkC0qHV44RFlwamUM1F58Kx56',
                'county' => 'Makueni',
                'PhoneNumber' => '0708694446',
                'IDNumber' => '13219300',
                'status' => 1,
                'role' => 1,
                'remember_token' => 'Z7HtVEgNW1fvNHTM6tvuoIqJwceV45l19jJoq05UcMU2Q78OQjLFgZv9fEZa',
                'created_at' => '2015-09-02 08:37:50',
                'updated_at' => '2015-09-09 04:09:38',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Phoebe Mumo',
                'email' => 'phoebe.mumo25@yahoo.com',
                'password' => '$2y$10$0PoXoEzaKvLpBFL6qM7axeXUnJRMAFhvEquJPbcu6nECPRh6xSKz6',
                'county' => 'Makueni',
                'PhoneNumber' => '0727 073569',
                'IDNumber' => '14730405',
                'status' => 1,
                'role' => 1,
                'remember_token' => 'j6Nsber00Pl2GlbI36Z13Y6EMN0eAATSFMV0M0US2SkMZaZgPeLH6IKS0w87',
                'created_at' => '2015-09-02 08:39:15',
                'updated_at' => '2015-09-02 08:39:44',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Augustine Makosi',
                'email' => 'augustinemakosi@yahoo.com',
                'password' => '$2y$10$8IFX2RRhTtHOv.ZiEEOQd.j8HeFK8Sb1gSyHJ.dGCHa7Jn2NGP9Zq',
                'county' => 'Makueni',
                'PhoneNumber' => '0726 944738',
                'IDNumber' => '2608684',
                'status' => 1,
                'role' => 1,
                'remember_token' => 'A8HisB8GKfkERSmE05WYDKxGBV9WBuVS8uT4TWHM9P64yDn1qVNpozRIefT4',
                'created_at' => '2015-09-02 08:41:25',
                'updated_at' => '2015-09-05 17:51:23',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Abednego Mutuku',
                'email' => 'abednegomutuku19@gmail.com',
                'password' => '$2y$10$9oJk4ihuWuBBHaZbUybSEe0V3xeuwEQw9SJTcKVtLiPXTGkvCqXny',
                'county' => 'Makueni',
                'PhoneNumber' => '0723793853',
                'IDNumber' => '25143014',
                'status' => 1,
                'role' => 1,
                'remember_token' => 'wgREqmUsuy7APLhF0VzNjynuD5Di1g0E8ahumZ2Aze9simLq6R01SeLhxA7l',
                'created_at' => '2015-09-02 08:42:47',
                'updated_at' => '2015-09-11 12:51:00',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Beth Mutisya',
                'email' => 'bnjeri59@yahoo.com',
                'password' => '$2y$10$zul.ixr/mdahL2lEdnNFSONziCma0oJHpohgheSYLEu.6wM8DF3AC',
                'county' => 'Makueni',
                'PhoneNumber' => '0728921427',
                'IDNumber' => '7173864',
                'status' => 1,
                'role' => 1,
                'remember_token' => '3x4FybV6B0hI3NHPVrWGHRxAkubuB9ugZwqyaunRPwISb8Vj7GtUh4ttBJsy',
                'created_at' => '2015-09-02 08:44:15',
                'updated_at' => '2015-09-02 08:44:23',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Nelson Mbithi',
                'email' => 'nelsonmbithi@gmail.com',
                'password' => '$2y$10$XBWygNv7McAkvVgvuZ2bUOEN4ur9q2VA.RJ4yB4WSRwuCWyCCSBhK',
                'county' => 'Makueni',
                'PhoneNumber' => '0728756391',
                'IDNumber' => '5058259',
                'status' => 1,
                'role' => 1,
                'remember_token' => '3JPCsnnyEhynpwwUcF4YCRBiYpMrFuCBKtv9QksQUHlXVYzZZ8XmPvght7Wc',
                'created_at' => '2015-09-02 08:45:39',
                'updated_at' => '2015-09-04 15:15:41',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Gregory Mutungi',
                'email' => 'mutungigregory@yahoo.com',
                'password' => '$2y$10$vDrEuHk6I72p4pr/yBbsvOIA2OVybD7ZocLPBV/AgTCoM4xzPO6IO',
                'county' => 'Makueni',
                'PhoneNumber' => '0723250316',
                'IDNumber' => '9851502',
                'status' => 0,
                'role' => 1,
                'remember_token' => 'RaVdbzP0iyNdl9Xxhl7o8h2Q8HR7gsb3XdXyukFoLBMAphXIXAwtFiJRfbyH',
                'created_at' => '2015-09-02 08:48:16',
                'updated_at' => '2015-10-02 05:39:33',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Joshua Muia',
                'email' => 'joshuakieti@yahoo.com',
                'password' => '$2y$10$KXZ4TXnAGrK4cUDNg3MElurbAk4a1xLqYlAa04riyLMQYG8hg5Bim',
                'county' => 'Makueni',
                'PhoneNumber' => '0723583139',
                'IDNumber' => '22372612',
                'status' => 1,
                'role' => 1,
                'remember_token' => 'tokJACzgce9gLF4rMVkBItVfusJ1vyKMgiNbmaD5Gu8k3AUwSPkWRDMEb1qL',
                'created_at' => '2015-09-02 08:49:35',
                'updated_at' => '2015-09-02 08:49:55',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Regina Muliko',
                'email' => 'rmuliko@yahoo.com',
                'password' => '$2y$10$sMnkghx7D1i/Q/yNbdq/Gur0J26X8znsBfXKi3TEzq6TiXLToyw0y',
                'county' => 'Makueni',
                'PhoneNumber' => '0720 016872',
                'IDNumber' => '2996660',
                'status' => 0,
                'role' => 1,
                'remember_token' => 'xKv9gFmSTf5zsEiROP5askM0vvsEdBLCwUWWlGZMphsBFuJ5DI0EW7rTefk9',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '2015-10-12 07:32:44',
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Ezekiel Kingoo',
                'email' => 'kngezekiel9@gmail.com',
                'password' => '$2y$10$mS4rEfveR6kE3GXQz5VofOS6xI414M7pNgpKh4E0TfNfvovw5PZky',
                'county' => 'Makueni',
                'PhoneNumber' => '0722 911209',
                'IDNumber' => '11623249',
                'status' => 1,
                'role' => 1,
                'remember_token' => 't0BOjEAYrqJPV3axDAckNNzGzm8FUPgYFLamsv0W2SqzSFvqFPLckvBpeNVU',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '2015-09-10 09:26:09',
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Stanslous Ndeto',
                'email' => 'stanslousndeto@gmail.com',
                'password' => '$2y$10$cw6BbSZH8A71GJB6gyx/uO/gj8KoQcXMJSCSmd/i54yaZbQSoPJZy',
                'county' => 'Makueni',
                'PhoneNumber' => '0713 201197',
                'IDNumber' => '4684208',
                'status' => 0,
                'role' => 1,
                'remember_token' => 'blu884FYzP04zGzlGsiOwIf7lXllCVGvbn7LsmM7kip0yS30GuAnbojsvDNO',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '2015-09-14 06:42:50',
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'id' => 43,
                'name' => 'Tabitha Ruo',
                'email' => 'tabithawangui20@gmail.com',
                'password' => '$2y$10$hERPUea9Mjq4kvlm7mNo1.JorpvECwYDTjbUbjN7IFXaEzT12NkUS',
                'county' => 'Makueni',
                'PhoneNumber' => '0713 967880',
                'IDNumber' => '22614635',
                'status' => 0,
                'role' => 1,
                'remember_token' => '',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '2015-10-12 07:33:50',
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'id' => 44,
                'name' => 'Michael Kamenju',
                'email' => 'mikekamenju@gmail.com',
                'password' => '$2y$10$mS4rEfveR6kE3GXQz5VofOS6xI414M7pNgpKh4E0TfNfvovw5PZky',
                'county' => 'Makueni',
                'PhoneNumber' => '0726 999981',
                'IDNumber' => '25220384',
                'status' => 1,
                'role' => 1,
                'remember_token' => '',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Joseph Kamalu',
                'email' => 'muuokamalu@yahoo.com',
                'password' => '$2y$10$mS4rEfveR6kE3GXQz5VofOS6xI414M7pNgpKh4E0TfNfvovw5PZky',
                'county' => 'Makueni',
                'PhoneNumber' => '0704 858168',
                'IDNumber' => '24181049',
                'status' => 1,
                'role' => 1,
                'remember_token' => 'RGh9B5yQObnVkT6pXoFJFgDtgm4jA7xi3x06QWbQzTMiJgCxKJE1OW7Vfm18',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '2015-09-02 08:53:25',
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Paul Chege Njenga',
                'email' => 'pchegenjenga@gmail.com',
                'password' => '$2y$10$FgYNyIPC8lUT8F7sCafGJea4x0aypVBh/3I4jfQ6KnxAI92cXWqrO',
                'county' => 'Nairobi',
                'PhoneNumber' => '0700000000',
                'IDNumber' => '23232323',
                'status' => 1,
                'role' => 1,
                'remember_token' => NULL,
                'created_at' => '2015-10-05 06:51:51',
                'updated_at' => '2015-11-12 04:58:26',
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Patrick Mwangi',
                'email' => 'pmwangi03@yahoo.com',
                'password' => '$2y$10$UItQ69gmNtX0nw1XPErLlO0l3EERDbwBU.drOmr3IrgdH6VFOlReq',
                'county' => 'Murang\'a',
                'PhoneNumber' => '0722864299',
                'IDNumber' => '9013363',
                'status' => 1,
                'role' => 1,
                'remember_token' => 'scdwED2KrKeqXJO9cLQts6Vwlxrwyv9fsvVJgNGZ3DKQGWconsB3kFOyjVsr',
                'created_at' => '2015-10-15 07:46:04',
                'updated_at' => '2015-10-26 08:55:36',
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Hannah Wanjiku',
                'email' => 'hnwanjiku@gmail.com',
                'password' => '$2y$10$B6dehMHaWB6QY.2/Tq9E3uUYCEAVHL8EoxzpigWp9vUKSzkusm8f.',
                'county' => 'Murang\'a',
                'PhoneNumber' => '0728527117',
                'IDNumber' => '22517084',
                'status' => 1,
                'role' => 1,
                'remember_token' => 'du3zFzhkNZvkBEdSDFNZaXh3OO2tBWFOs0xURRlBIqoUs3exi5RNJMkdJali',
                'created_at' => '2015-10-15 07:48:27',
                'updated_at' => '2015-10-27 10:55:34',
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Antony Mwangi',
                'email' => 'antonimwangi@gmail.com',
                'password' => '$2y$10$5RtKjBLpV3.6geaRdC7qOeMZAoYuB3xg4QN1zWuE5Q4MQmT8VkVXu',
                'county' => 'Murang\'a',
                'PhoneNumber' => '0722332497',
                'IDNumber' => '10393991',
                'status' => 1,
                'role' => 1,
                'remember_token' => NULL,
                'created_at' => '2015-10-15 07:49:34',
                'updated_at' => '2015-10-15 07:49:34',
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Rosemary Kiige',
                'email' => 'kiigerosemary@gmail.com',
                'password' => '$2y$10$LZnRZoyETr2bsG.F6qSi7OVii4Pz14m2IRw7xVSEm7Bfvv179cNXC',
                'county' => 'Murang\'a',
                'PhoneNumber' => '0722439487',
                'IDNumber' => '20595408',
                'status' => 1,
                'role' => 1,
                'remember_token' => NULL,
                'created_at' => '2015-10-15 07:51:20',
                'updated_at' => '2015-10-15 07:51:20',
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Josephine Okeari',
                'email' => 'Josephinenyabiage42@gmail.com',
                'password' => '$2y$10$J6ztAQ7vdq3tTawUEFWezuFAF4awAUOUC.SMXzJP3awgXvkovUiq2',
                'county' => 'Murang\'a',
                'PhoneNumber' => '0723738568',
                'IDNumber' => '13124344',
                'status' => 1,
                'role' => 0,
                'remember_token' => NULL,
                'created_at' => '2015-10-15 07:53:10',
                'updated_at' => '2015-10-15 07:53:10',
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Mary Wanjora',
                'email' => 'wanjoramary@gmail.com',
                'password' => '$2y$10$kZAPK1Fr9xYewwfqhGbGT..Lt7obl0GtOolp3xn7DGBykbe156B2S',
                'county' => 'Murang\'a',
                'PhoneNumber' => '0711671911',
                'IDNumber' => '7550927',
                'status' => 1,
                'role' => 0,
                'remember_token' => NULL,
                'created_at' => '2015-10-15 07:54:00',
                'updated_at' => '2015-10-15 07:54:00',
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'John Kabiru',
                'email' => 'johanamdinah@gmail.com',
                'password' => '$2y$10$ArgAXYIaYzLiHN5yvYpjtu.ty1sjmzgWWPxo2mBsqzukY1TFlVRu.',
                'county' => 'Murang\'a',
                'PhoneNumber' => '0720421369',
                'IDNumber' => '5768070',
                'status' => 1,
                'role' => 0,
                'remember_token' => NULL,
                'created_at' => '2015-10-15 07:54:53',
                'updated_at' => '2015-10-15 07:54:53',
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Gachanja Kamau',
                'email' => 'gachanjakamau@gmail.com',
                'password' => '$2y$10$Ma/yM9diiby1OlFw42ik8O.wTjJs892x7RXAYUhKN0pb8KY/Or4ie',
                'county' => 'Murang\'a',
                'PhoneNumber' => '0725873452',
                'IDNumber' => '22554923',
                'status' => 1,
                'role' => 0,
                'remember_token' => 'ThoeASpNut7S6SB9BnRRVeBhPByPXdTOdy3lDfEIHvTihfJXNhE7qhboUN5y',
                'created_at' => '2015-10-15 07:59:33',
                'updated_at' => '2015-10-23 12:58:16',
                'deleted_at' => NULL,
            ),
            46 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Daniel Gachathi',
                'email' => 'destiny.gachathi@gmail.com',
                'password' => '$2y$10$0vd0t3m/8V3u1FR/CkR7kuqzMrNidC7sfQUGWqhhQbBL19M1/DXwy',
                'county' => 'Murang\'a',
                'PhoneNumber' => '0721896314',
                'IDNumber' => '21946464',
                'status' => 1,
                'role' => 0,
                'remember_token' => NULL,
                'created_at' => '2015-10-15 08:01:17',
                'updated_at' => '2015-10-15 08:01:17',
                'deleted_at' => NULL,
            ),
            47 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Moses Njiku',
                'email' => 'mnjiruh@gmail.com',
                'password' => '$2y$10$wiNy9tv3fjDadUhOJx8MHOcVrM9ND6cF4eIbLbyW0CcE4MblzH9Sa',
                'county' => 'Murang\'a',
                'PhoneNumber' => '0722733723',
                'IDNumber' => '22678164',
                'status' => 1,
                'role' => 0,
                'remember_token' => 'U4pipRGIWIHtGcZihBNyVjEzyCAD7dIU8vAbIEclrhtZ8ZgkKue2SJpmNY3z',
                'created_at' => '2015-10-15 08:01:54',
                'updated_at' => '2015-10-26 14:34:06',
                'deleted_at' => NULL,
            ),
            48 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Boniface Njoroge',
                'email' => 'bonige02@yahoo.com',
                'password' => '$2y$10$cq6.R3HqSQHPVzwIRiga2Ob3rCHlD98VWwL7wtYJRggrxBiBXT7f.',
                'county' => 'Murang\'a',
                'PhoneNumber' => '0722213195',
                'IDNumber' => '20974307',
                'status' => 1,
                'role' => 0,
                'remember_token' => 'AnXOldesmevgykIjp2PmHFzPuy9aGvsCaYYQVqObfXfO60YfYLldXcvuKJ2j',
                'created_at' => '2015-10-15 08:04:14',
                'updated_at' => '2015-10-26 13:31:01',
                'deleted_at' => NULL,
            ),
            49 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Ruth Kamau',
                'email' => 'ruthkamau406@yahoo.com',
                'password' => '$2y$10$CS7QBvUsAD5xiQcB0FFQUuXurWIt1NKwGRUkDxZ242D.17SD6o0zi',
                'county' => 'Murang\'a',
                'PhoneNumber' => '0724154845',
                'IDNumber' => '442155',
                'status' => 1,
                'role' => 0,
                'remember_token' => NULL,
                'created_at' => '2015-10-15 08:04:49',
                'updated_at' => '2015-10-15 08:04:49',
                'deleted_at' => NULL,
            ),
            50 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Irene Mucheru',
                'email' => 'mucheruirene@gmail.com',
                'password' => '$2y$10$5MK3RQvDDvXP/y3jvkS94u6zd/sAfZmAt78Cl41r/JqjfNHiw18HO',
                'county' => 'Murang\'a',
                'PhoneNumber' => '0720974793',
                'IDNumber' => '22926579',
                'status' => 1,
                'role' => 0,
                'remember_token' => NULL,
                'created_at' => '2015-10-15 08:05:44',
                'updated_at' => '2015-10-15 08:05:44',
                'deleted_at' => NULL,
            ),
            51 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Ferdnard Gakure',
                'email' => 'ferdnardgakure@yahoo.com',
                'password' => '$2y$10$5CO3PKm1WP0.zY2kUdHaYueqXBthfN.Dv98TdGQeNMwn2aq.ubmy.',
                'county' => 'Murang\'a',
                'PhoneNumber' => '0727853944',
                'IDNumber' => '22195520',
                'status' => 1,
                'role' => 0,
                'remember_token' => 'HmDnFP36xIYTkAKnf81UDf2oVjTzuTcBFzTr8DHrK6V3x0Cda6FVRiKGhRMG',
                'created_at' => '2015-10-15 08:06:36',
                'updated_at' => '2015-10-27 19:02:32',
                'deleted_at' => NULL,
            ),
            52 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Lucy Irungu',
                'email' => 'irungu4@gmail.com',
                'password' => '$2y$10$lwgUpq75z2wocqnV40shg.sZRYXH06PqUPk7su.5.3w4ZW4sFPaoi',
                'county' => 'Murang\'a',
                'PhoneNumber' => '0721697981',
                'IDNumber' => '13653417',
                'status' => 1,
                'role' => 0,
                'remember_token' => NULL,
                'created_at' => '2015-10-15 08:07:12',
                'updated_at' => '2015-10-15 08:07:12',
                'deleted_at' => NULL,
            ),
            53 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'James Mwangi',
                'email' => 'karanimuthua@gmail.com',
                'password' => '$2y$10$d3U.j9gXoT4FOa6fGiOQdOezDPkgqec916xzi8QAJRH805sfyOuNS',
                'county' => 'Murang\'a',
                'PhoneNumber' => '0725749450',
                'IDNumber' => '23634429',
                'status' => 1,
                'role' => 0,
                'remember_token' => 'smhuXlD13nezQgJRmvqpao7DDPjoSLYRdoNhzpgR0Q4nqZqqwlYI4dZ05fOC',
                'created_at' => '2015-10-15 08:09:48',
                'updated_at' => '2015-10-22 14:26:38',
                'deleted_at' => NULL,
            ),
            54 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Lucy Muhoro',
                'email' => 'wamwithalj@yahoo.com',
                'password' => '$2y$10$A5KSj4XU1Vd4tiveGa6fsedyLRSj2tpywBtl6CKOXCF5mWnEtdhEK',
                'county' => 'Murang\'a',
                'PhoneNumber' => '0722644783',
                'IDNumber' => '3681259',
                'status' => 1,
                'role' => 0,
                'remember_token' => NULL,
                'created_at' => '2015-10-15 08:12:50',
                'updated_at' => '2015-10-15 08:12:50',
                'deleted_at' => NULL,
            ),
            55 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Margaret Ndegwa',
                'email' => 'magaretndegwa2@gmail.com',
                'password' => '$2y$10$cQgeMSFCm3bYRarJPsInVeX97mhrHOVfViNRq1k9.ewotJihj49pO',
                'county' => 'Murang\'a',
                'PhoneNumber' => '0721752713',
                'IDNumber' => '11372844',
                'status' => 1,
                'role' => 0,
                'remember_token' => 'NrdyczhkmhpaHKSWMitTgFBqQpgqquIiCxfq6M1hMkEYxp2KKzOQs8oQBeHs',
                'created_at' => '2015-10-15 08:13:33',
                'updated_at' => '2015-10-22 13:10:01',
                'deleted_at' => NULL,
            ),
            56 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Esther Wahome',
                'email' => 'estherwanjikuh@yahoo.com',
                'password' => '$2y$10$tQa72nsh/W05auG0sKiZn.kjOtJEB7zy8bhnRTynLxZYJjbty5RuS',
                'county' => 'Murang\'a',
                'PhoneNumber' => '0722682376',
                'IDNumber' => '5562412',
                'status' => 1,
                'role' => 0,
                'remember_token' => NULL,
                'created_at' => '2015-10-15 08:14:14',
                'updated_at' => '2015-10-15 08:14:14',
                'deleted_at' => NULL,
            ),
            57 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Muguku Eutychu',
                'email' => 'muguku23@gmail.com',
                'password' => '$2y$10$GRvLqkDiwiQe2I9.osi4h.HZsEJgBMSieQMd2jVVsp8mJghARqfO6',
                'county' => 'Murang\'a',
                'PhoneNumber' => '0723233002',
                'IDNumber' => '24804679',
                'status' => 1,
                'role' => 0,
                'remember_token' => NULL,
                'created_at' => '2015-10-15 08:15:08',
                'updated_at' => '2015-10-15 08:15:08',
                'deleted_at' => NULL,
            ),
            58 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Rahab Isabell',
                'email' => 'rahabmuthoro55@yahoo.com',
                'password' => '$2y$10$By6yKCyEXVVUmG.Dog4EmOGQA0aGX2YG4P3B8UcxNa3UaCrvXuYoa',
                'county' => 'Murang\'a',
                'PhoneNumber' => '0722594356',
                'IDNumber' => '12940927',
                'status' => 1,
                'role' => 0,
                'remember_token' => NULL,
                'created_at' => '2015-10-15 08:16:07',
                'updated_at' => '2015-10-15 08:16:07',
                'deleted_at' => NULL,
            ),
            59 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Nicholas Kanyagia',
                'email' => 'nkk77707@gmail.com',
                'password' => '$2y$10$A80u5wf/m3M22ejDJcSi0OEEQv.ItS9EQEh/jo5S5F01ig1mu.UWi',
                'county' => '',
                'PhoneNumber' => '',
                'IDNumber' => '',
                'status' => 1,
                'role' => 4,
                'remember_token' => 'NfdhxOvDNCZDQVKfisea5YwyuDCKDScXCbRuo8wn4oWeBCvGJLsC0j0S1lxh',
                'created_at' => '2015-07-14 11:38:59',
                'updated_at' => '2015-11-12 08:30:51',
                'deleted_at' => NULL,
            ),
            60 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'patrick kamau mwangi',
                'email' => 'pkmwangi03@yahoo.com',
                'password' => '$2y$10$D/OvDBQycVRIVYKVLS2h6.SJ2EbaZGAUenc8DhhG5PxsO2IENSld6',
                'county' => 'Murang\'a',
                'PhoneNumber' => '0722864299',
                'IDNumber' => '9013363',
                'status' => 0,
                'role' => 0,
                'remember_token' => NULL,
                'created_at' => '2015-10-18 13:42:35',
                'updated_at' => '2015-10-23 08:22:03',
                'deleted_at' => NULL,
            ),
            61 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Alfred Opon',
                'email' => 'alfredaejae@gmail.com',
                'password' => '$2y$10$VPIUerXFBgVVi42GEKLflua5rckBF8H7LcgPSOrnNtYJZ57Ci4XnW',
                'county' => 'Nairobi',
                'PhoneNumber' => '0705093952',
                'IDNumber' => '32201764',
                'status' => 1,
                'role' => 4,
                'remember_token' => NULL,
                'created_at' => '2015-10-19 07:00:19',
                'updated_at' => '2015-10-21 02:52:15',
                'deleted_at' => NULL,
            ),
            62 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'id' => 77710,
                'name' => 'Dr Stephen Njenga',
                'email' => 'ngethe.steve@gmail.com',
                'password' => '$2y$10$5eWdsYr2KCoxYAOcqQUb1O2KmWGNsTLMvAbj.Xg56EBKHCLCi.jV2',
                'county' => 'Murang\'a',
                'PhoneNumber' => '0722112234',
                'IDNumber' => '22859039',
                'status' => 1,
                'role' => 0,
                'remember_token' => 'e4kqswsHyxujq5Q3Bqrj0Mzhlxw42cKPhIwNGrqMrztKsHqhSxH2O79ZOp5T',
                'created_at' => '2015-10-19 09:38:02',
                'updated_at' => '2015-10-25 16:59:38',
                'deleted_at' => NULL,
            ),
            63 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'sarah kahiu',
                'email' => 'sarahkahiu@gmail.com',
                'password' => '$2y$10$2uA7jq.KraqFRg/QTwIhL.jDDlZCWpGuPSaSIWv4qRM7Vij0W5MJO',
                'county' => 'Murang\'a',
                'PhoneNumber' => '0724585620',
                'IDNumber' => '23203755',
                'status' => 0,
                'role' => 0,
                'remember_token' => NULL,
                'created_at' => '2015-10-21 07:15:38',
                'updated_at' => '2015-10-21 07:15:38',
                'deleted_at' => NULL,
            ),
            64 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'denis muasa',
                'email' => 'denomuasa@gmail.com',
                'password' => '$2y$10$sXowqq3r7VT8RV1xqJHzQe/KhZrrivJgQVk2eccqAUmEYnxCbWkfu',
                'county' => 'Machakos',
                'PhoneNumber' => '0717294942',
                'IDNumber' => '29234185',
                'status' => 1,
                'role' => 0,
                'remember_token' => NULL,
                'created_at' => '2015-10-21 11:15:36',
                'updated_at' => '2015-12-23 08:24:18',
                'deleted_at' => NULL,
            ),
            65 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Solokioko Mbithi',
                'email' => 'solokmbithi@gmail.com',
                'password' => '$2y$10$IJxg42YPtHWju4uo5xR8../7IVboFGER2IO65RcQ4BQ0f3LzuBTSC',
                'county' => 'Nairobi',
                'PhoneNumber' => '0728979185',
                'IDNumber' => '30536697',
                'status' => 1,
                'role' => 1,
                'remember_token' => 'O3rVIxT2Aarb8UFT8maLarwNlDsCBJJDU5jP6Jx3gWvHuKA3hvSVjqB6yMNc',
                'created_at' => '2015-10-21 13:03:21',
                'updated_at' => '2015-10-27 13:22:59',
                'deleted_at' => NULL,
            ),
            66 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Elvin  Njau',
                'email' => 'njauelvin@gmail.com',
                'password' => '$2y$10$/hFrWc.T3/bdTrYv1sxCL.bfxbC8tGol1JsNPQfNjo4cu8C3q9GS.',
                'county' => 'Nairobi',
                'PhoneNumber' => '0728367960',
                'IDNumber' => '28264979',
                'status' => 1,
                'role' => 1,
                'remember_token' => 'DEsWNK9YQln7Fi8pN2KBbuVYzGDe2NR6RpKyVo1E6gQuLtldc5la3NoScwdr',
                'created_at' => '2015-10-23 07:48:33',
                'updated_at' => '2015-10-26 11:40:10',
                'deleted_at' => NULL,
            ),
            67 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Dennis Mong\'are',
                'email' => 'mongaredennis@ymail.com',
                'password' => '$2y$10$ojbPTy4t1gDqefU4/yPUu.KYHi72KXFDa5zNJUzwEvP0KRAzSYNs6',
                'county' => 'Nairobi',
                'PhoneNumber' => '0710333682',
                'IDNumber' => '28620864',
                'status' => 1,
                'role' => 1,
                'remember_token' => 'YF97D2eLK7XVqvsiY5w4tiTPtA9GvLoNAZMFyGF0RKoZHICwJkIijJVOIhbL',
                'created_at' => '2015-10-26 07:09:23',
                'updated_at' => '2015-10-27 10:14:15',
                'deleted_at' => NULL,
            ),
            68 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Christine Kimeu',
                'email' => 'ckimeu50@gmail.com',
                'password' => '$2y$10$YMD6TwVjF2HGqnRdK8CCfeTSSh3ju76O6DtTSod9rQ3aw5zG00hiG',
                'county' => 'Narok ',
                'PhoneNumber' => '0722491377',
                'IDNumber' => '11619046',
                'status' => 1,
                'role' => 0,
                'remember_token' => NULL,
                'created_at' => '2015-10-26 09:21:59',
                'updated_at' => '2015-10-26 09:21:59',
                'deleted_at' => NULL,
            ),
            69 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Rhoda Orido',
                'email' => 'rhodaorido@yahoo.com',
                'password' => '$2y$10$.P.hwoHQvwtM7Ps7I2zltOurW7Y9ETJJFJZinWaWCDPAFtw5Xl7t6',
                'county' => 'Narok ',
                'PhoneNumber' => '0724583972',
                'IDNumber' => '10820128',
                'status' => 1,
                'role' => 0,
                'remember_token' => NULL,
                'created_at' => '2015-10-26 09:23:22',
                'updated_at' => '2015-10-26 09:23:22',
                'deleted_at' => NULL,
            ),
            70 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Ephantus Wahome',
                'email' => 'ephantuswahome@gmail.com',
                'password' => '$2y$10$NPGpu0GIAzavyNoyaHVGVukmbadZmxzWU/ooOej4H6PdO3RKemqi.',
                'county' => 'Narok ',
                'PhoneNumber' => '0710116087',
                'IDNumber' => '24469338',
                'status' => 1,
                'role' => 0,
                'remember_token' => 'JVWhCT8fpZqhlfq3v4bI8rMNd7nvKdYbfnFLZgPMGCK0wcxK37SZQvqjQKtv',
                'created_at' => '2015-10-26 09:24:20',
                'updated_at' => '2015-10-27 07:40:46',
                'deleted_at' => NULL,
            ),
            71 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Josephine Ngeno',
                'email' => 'tetyojose@yahoo.com',
                'password' => '$2y$10$WephL8bxFIaxj6N5nNNQQebAzT8UmSUyIzSPrpBuh9NbT/9VSFE/q',
                'county' => 'Narok ',
                'PhoneNumber' => '0722361484',
                'IDNumber' => '22610648',
                'status' => 1,
                'role' => 0,
                'remember_token' => NULL,
                'created_at' => '2015-10-26 09:25:46',
                'updated_at' => '2015-10-26 09:25:46',
                'deleted_at' => NULL,
            ),
            72 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Samuel Seno',
                'email' => 'samwelseno@gmail.com',
                'password' => '$2y$10$/XAhvknRMK43BuAIVQFbF.AUg1QiiEHYQp4K6s6AtZhKzichxFlf6',
                'county' => 'Narok ',
                'PhoneNumber' => '0724338585',
                'IDNumber' => '21611097',
                'status' => 1,
                'role' => 0,
                'remember_token' => NULL,
                'created_at' => '2015-10-26 09:26:39',
                'updated_at' => '2015-10-26 09:26:39',
                'deleted_at' => NULL,
            ),
            73 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Gerald Yaile',
                'email' => 'gsamaryk@gmail.com',
                'password' => '$2y$10$zjRdS87fl6z9tQai5aMbGOJscAjgG2ONf0Drc4sd.ME5oEjX7Wmjm',
                'county' => 'Narok ',
                'PhoneNumber' => '0712234902',
                'IDNumber' => '26032456',
                'status' => 1,
                'role' => 0,
                'remember_token' => NULL,
                'created_at' => '2015-10-26 09:27:33',
                'updated_at' => '2015-10-26 09:27:33',
                'deleted_at' => NULL,
            ),
            74 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Jonathan Taraiya',
                'email' => 'tnkukuu@gmail.com',
                'password' => '$2y$10$5yxiT5P4BRQe9cJ76MZlJOHmFmO1bAEFi.b6T3Yup6pgN7osy3jzW',
                'county' => 'Narok ',
                'PhoneNumber' => '0726326105',
                'IDNumber' => '23895057',
                'status' => 1,
                'role' => 0,
                'remember_token' => NULL,
                'created_at' => '2015-10-26 09:28:32',
                'updated_at' => '2015-10-26 09:28:32',
                'deleted_at' => NULL,
            ),
            75 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Anthony Langat',
                'email' => 'langatkanthony@gmail.com',
                'password' => '$2y$10$FC9yp.J.q0misvhftDP3ZOspNKjKPHg0t9UH/OU9PrrWNuSek/FzO',
                'county' => 'Narok ',
                'PhoneNumber' => '0701856196',
                'IDNumber' => '23808036',
                'status' => 1,
                'role' => 0,
                'remember_token' => NULL,
                'created_at' => '2015-10-26 09:29:34',
                'updated_at' => '2015-10-26 09:29:34',
                'deleted_at' => NULL,
            ),
            76 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Felistas Misiati',
                'email' => 'felistas.misiati@gmail.com',
                'password' => '$2y$10$m5HEJqj0kP8JE3n0lXc2xOtahmyOmsGe3.GzWWBAxVU/NGmdIpgwO',
                'county' => 'Narok ',
                'PhoneNumber' => '0725594452',
                'IDNumber' => '25456656',
                'status' => 1,
                'role' => 0,
                'remember_token' => NULL,
                'created_at' => '2015-10-26 09:30:17',
                'updated_at' => '2015-10-26 09:30:17',
                'deleted_at' => NULL,
            ),
            77 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Jackson Koskei',
                'email' => 'koskeijack24@yahoo.om',
                'password' => '$2y$10$cxsA866g68HZoD5uz3r6h.xmUw7CdOthMYI4Ubk0dwY0DiKXgVh2q',
                'county' => 'Narok ',
                'PhoneNumber' => '0719190650',
                'IDNumber' => '11207985',
                'status' => 1,
                'role' => 0,
                'remember_token' => NULL,
                'created_at' => '2015-10-26 09:31:02',
                'updated_at' => '2015-10-26 09:31:02',
                'deleted_at' => NULL,
            ),
            78 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Dickson Kigwenay',
                'email' => 'scmohnarowest@yahoo.com',
                'password' => '$2y$10$Jb7Wnvd3NKWotnzGn3ut/.qPx6ZWnu7T.dNhoMcv2um2H9nLlzalC',
                'county' => 'Narok ',
                'PhoneNumber' => '0725561438',
                'IDNumber' => '20670674',
                'status' => 1,
                'role' => 0,
                'remember_token' => NULL,
                'created_at' => '2015-10-26 09:32:30',
                'updated_at' => '2015-10-26 09:32:30',
                'deleted_at' => NULL,
            ),
            79 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'David Kimojino',
                'email' => 'dkimojino@yahoo.com',
                'password' => '$2y$10$3BN6MI9kVwuQbZzkPBWpK.XqsdVFWILAU2MZ6TUdxwjA0d7FJgnvu',
                'county' => 'Narok ',
                'PhoneNumber' => '0720481648',
                'IDNumber' => '4561702',
                'status' => 1,
                'role' => 0,
                'remember_token' => NULL,
                'created_at' => '2015-10-26 09:33:18',
                'updated_at' => '2015-10-26 09:33:18',
                'deleted_at' => NULL,
            ),
            80 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Naomy Chemutai',
                'email' => 'naomichemutai@gmail.com',
                'password' => '$2y$10$Rl5J8pimnmD4z4farf7M5.vR0WJtzYfW/I9kPG7FbtggeySaz9t8G',
                'county' => 'Narok ',
                'PhoneNumber' => '0717618143',
                'IDNumber' => '27043733',
                'status' => 1,
                'role' => 0,
                'remember_token' => NULL,
                'created_at' => '2015-10-26 09:34:04',
                'updated_at' => '2015-10-26 09:34:04',
                'deleted_at' => NULL,
            ),
            81 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Kimani Maina',
                'email' => 'kimanimaina4@gmail.com',
                'password' => '$2y$10$BjSxHrwaDDp/BUeOrl7xnu.FNwRWpjzRhYjZZW1dIcszkAL4IGjbi',
                'county' => 'Narok ',
                'PhoneNumber' => '0722586967',
                'IDNumber' => '22798363',
                'status' => 1,
                'role' => 0,
                'remember_token' => '2mg5kI0nRRyltjZaQLRhMpF9JWOvqeHxOdLdL6X7es4my46xTdh7xmNdEGhx',
                'created_at' => '2015-10-26 09:34:45',
                'updated_at' => '2015-10-27 19:02:30',
                'deleted_at' => NULL,
            ),
            82 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Edwin Kurere',
                'email' => 'edwin_kiprotich@yahoo.com',
                'password' => '$2y$10$hIbKJYHa0GoSuW/6iPBxH.wbNx5X2mWd8QeBY9tkbYfByP6yrEqba',
                'county' => 'Narok ',
                'PhoneNumber' => '0726384328',
                'IDNumber' => '20236552',
                'status' => 1,
                'role' => 0,
                'remember_token' => NULL,
                'created_at' => '2015-10-26 09:35:33',
                'updated_at' => '2015-10-26 09:35:33',
                'deleted_at' => NULL,
            ),
            83 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Langat Joel',
                'email' => 'joellangat52@yahoo.com',
                'password' => '$2y$10$rsBw2a2HF2mXqW1KFAtqruDmKNh7kZydotSVL.qzLqWjjHkkt0AQu',
                'county' => 'Narok ',
                'PhoneNumber' => '0723896771',
                'IDNumber' => '20784605',
                'status' => 1,
                'role' => 0,
                'remember_token' => NULL,
                'created_at' => '2015-10-26 09:36:24',
                'updated_at' => '2015-10-26 09:36:24',
                'deleted_at' => NULL,
            ),
            84 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'George Mwita',
                'email' => 'mwitageorge2008@gmail.com',
                'password' => '$2y$10$8ZBARKo43zvRc4e4zFePUuVwUSEUwiyiuj.3fnqY9CORayhSm0j6y',
                'county' => 'Narok ',
                'PhoneNumber' => '0729323592',
                'IDNumber' => '22123165',
                'status' => 1,
                'role' => 0,
                'remember_token' => NULL,
                'created_at' => '2015-10-26 09:37:10',
                'updated_at' => '2015-10-26 09:37:10',
                'deleted_at' => NULL,
            ),
            85 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Lumarai Kabula',
                'email' => 'tkabula2@gmail.com',
                'password' => '$2y$10$aiAd8M86aZp47uOwYKU/Q.2CPibMxZwbc3Iv.naRCTBppvLGEbuVy',
                'county' => 'Narok ',
                'PhoneNumber' => '0728261532',
                'IDNumber' => '260771179',
                'status' => 1,
                'role' => 0,
                'remember_token' => NULL,
                'created_at' => '2015-10-26 09:38:08',
                'updated_at' => '2015-10-26 09:38:08',
                'deleted_at' => NULL,
            ),
            86 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Irene Melop',
                'email' => 'irenemelop75@gmail.com',
                'password' => '$2y$10$UfFiGAmWQVdq1QIJk2Md1.E2MIsTKyfVEGXvM.lHOK8PEeQMSoF3u',
                'county' => 'Narok ',
                'PhoneNumber' => '0727526540',
                'IDNumber' => '13665331',
                'status' => 1,
                'role' => 0,
                'remember_token' => NULL,
                'created_at' => '2015-10-26 09:39:01',
                'updated_at' => '2015-10-26 09:39:01',
                'deleted_at' => NULL,
            ),
            87 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Loice Kerich',
                'email' => 'loicekerich@yahoo.com',
                'password' => '$2y$10$ScYX2Uhq5XU2wstKMnyPmesZoTh47ZcSHH2AjHgx/EUMX.lr5HlLS',
                'county' => 'Narok ',
                'PhoneNumber' => '0724946170',
                'IDNumber' => '22056235',
                'status' => 1,
                'role' => 0,
                'remember_token' => NULL,
                'created_at' => '2015-10-26 09:39:50',
                'updated_at' => '2015-10-26 09:39:50',
                'deleted_at' => NULL,
            ),
            88 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'Enoch Kotikot',
                'email' => 'kotenoch21967@gmail.com',
                'password' => '$2y$10$D.7gAJ.C1YSsEU1PSNlbReqqOq2B.LH9v.M1n.fE3e2waVSTPfbYi',
                'county' => 'Narok ',
                'PhoneNumber' => '0722830637',
                'IDNumber' => '8319005',
                'status' => 1,
                'role' => 0,
                'remember_token' => NULL,
                'created_at' => '2015-10-26 09:40:44',
                'updated_at' => '2015-10-26 09:40:44',
                'deleted_at' => NULL,
            ),
            89 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'aaaa',
                'email' => 'aaa@example.com',
                'password' => '$2y$10$1PQv4UiaDEe5bkBOv9UTFeBEAuoX9P1vTBlxrFB9w.JJRTrzWftmW',
                'county' => 'Nairobi',
                'PhoneNumber' => '0722705700',
                'IDNumber' => '32212312',
                'status' => 1,
                'role' => 0,
                'remember_token' => NULL,
                'created_at' => '2015-12-23 08:20:14',
                'updated_at' => '2015-12-23 08:20:14',
                'deleted_at' => NULL,
            ),
            90 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'aaaa',
                'email' => 'aaas@example.com',
                'password' => '$2y$10$1L9tp1mcq9PBpCiy4XMmFuwuZGveV5o/iN3ZStoWPF6yM3HjcdrkW',
                'county' => 'Machakos',
                'PhoneNumber' => '0733750701',
                'IDNumber' => '32212322',
                'status' => 1,
                'role' => 1,
                'remember_token' => NULL,
                'created_at' => '2015-12-23 08:20:17',
                'updated_at' => '2015-12-23 08:20:17',
                'deleted_at' => NULL,
            ),
            91 => 
            array (
                '_id' => 
                MongoDB\BSON\ObjectID::__set_state(array(
                )),
                'name' => 'aaaaa',
                'email' => 'cccs@example.com',
                'password' => '$2y$10$tUh7XHjp4kWI0sAybwqyY.NYbmWqA6OrlXmpsWDr.NC4oLRuK9lAm',
                'county' => 'Nakuru',
                'PhoneNumber' => '0715750600',
                'IDNumber' => '32212332',
                'status' => 1,
                'role' => 2,
                'remember_token' => NULL,
                'created_at' => '2015-12-23 08:20:21',
                'updated_at' => '2015-12-23 08:20:21',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}
