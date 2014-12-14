<?php if(!defined('BASEPATH')) exit('Hacking Attempt. Keluar dari sistem.');

$config = array(
    'signup' => array(
        array('field' => 'username', 'label' => 'Username', 'rules' => 'required'),
        array('field' => 'password', 'label' => 'Password', 'rules' => 'required|matches[passconf]'),
        array('field' => 'passconf', 'label' => 'Konfirmasi password', 'rules' => 'required'),
        array('field' => 'email', 'label' => 'Email', 'rules' => 'required|valid_email')
    ),
    'signin' => array(
        array('field' => 'email', 'label' => 'Email', 'rules' => 'required|valid_email'),
        array('field' => 'password', 'label' => 'Password', 'rules' => 'required')
    ),

    // Admin access validation
    'group_simpan' => array(
        array('field' => 'level_group', 'label' => 'Level', 'rules' => 'required'),
        array('field' => 'nama_group', 'label' => 'Nama', 'rules' => 'required')
    ),
    'group_ubah' => array(
        array('field' => 'level_group', 'label' => 'Level', 'rules' => 'required'),
        array('field' => 'nama_group', 'label' => 'Nama', 'rules' => 'required')
    ),

    'akses_simpan' => array(
        array('field' => 'level_akses', 'label' => 'Level akses', 'rules' => 'required')
    ),
    'akses_ubah' => array(
        array('field' => 'level_akses', 'label' => 'Level akses', 'rules' => 'required')
    ),

    'status_simpan' => array(
        array('field' => 'id_user', 'label' => 'ID User', 'rules' => 'required'),
        array('field' => 'user_status', 'label' => 'Status', 'rules' => 'required')
    ),
    'status_ubah' => array(
        array('field' => 'id_user', 'label' => 'ID User', 'rules' => 'required'),
        array('field' => 'user_status', 'label' => 'Status', 'rules' => 'required')
    ),

    'unit_kerja_simpan' => array(
        array('field' => 'kode_unit_kerja', 'label' => 'Kode Unit kerja', 'rules' => 'required'),
        array('field' => 'content_unit_kerja', 'label' => 'Content Unit kerja', 'rules' => 'required')
    ),
    'unit_kerja_ubah' => array(
        array('field' => 'kode_unit_kerja', 'label' => 'Kode Unit kerja', 'rules' => 'required'),
        array('field' => 'content_unit_kerja', 'label' => 'Content Unit kerja', 'rules' => 'required')
    ),

    'user_simpan' => array(
        array('field' => 'NIK', 'label' => 'NIK', 'rules' => 'required'),
        array('field' => 'kode_unit_kerja', 'label' => 'Kode Unit Kerja', 'rules' => 'required'),
        array('field' => 'id_group', 'label' => 'Group', 'rules' => 'required'),
        array('field' => 'id_akses', 'label' => 'Level akses', 'rules' => 'required'),
        array('field' => 'username', 'label' => 'Username', 'rules' => 'required'),
        array('field' => 'password_user', 'label' => 'Password', 'rules' => 'required')
    ),
    'user_ubah' => array(
        array('field' => 'NIK', 'label' => 'NIK', 'rules' => 'required'),
        array('field' => 'kode_unit_kerja', 'label' => 'Kode Unit Kerja', 'rules' => 'required'),
        array('field' => 'id_group', 'label' => 'Group', 'rules' => 'required'),
        array('field' => 'id_akses', 'label' => 'Level akses', 'rules' => 'required'),
        array('field' => 'username', 'label' => 'Username', 'rules' => 'required')
    ),

    'karyawan_simpan' => array(
        array('field' => 'NIK', 'label' => 'NIK', 'rules' => 'required'),
        array('field' => 'kode_unit_kerja', 'label' => 'Kode Unit Kerja', 'rules' => 'required'),
        array('field' => 'nama', 'label' => 'Nama', 'rules' => 'required'),
        array('field' => 'poscode', 'label' => 'Poscode', 'rules' => 'required'),
        array('field' => 'jabatan', 'label' => 'Jabatan', 'rules' => 'required'),
        array('field' => 'postitle', 'label' => 'Postitle', 'rules' => 'required'),
        array('field' => 'unitkerja', 'label' => 'Unit Kerja', 'rules' => 'required'),
        array('field' => 'workloc', 'label' => 'Workloc', 'rules' => 'required'),
    ),
    'karyawan_ubah' => array(
        array('field' => 'NIK', 'label' => 'NIK', 'rules' => 'required'),
        array('field' => 'kode_unit_kerja', 'label' => 'Kode Unit Kerja', 'rules' => 'required'),
        array('field' => 'nama', 'label' => 'Nama', 'rules' => 'required'),
        array('field' => 'poscode', 'label' => 'Poscode', 'rules' => 'required'),
        array('field' => 'jabatan', 'label' => 'Jabatan', 'rules' => 'required'),
        array('field' => 'postitle', 'label' => 'Postitle', 'rules' => 'required'),
        array('field' => 'unitkerja', 'label' => 'Unit Kerja', 'rules' => 'required'),
        array('field' => 'workloc', 'label' => 'Workloc', 'rules' => 'required'),
    ),

    'pendidikan_simpan' => array(
        array('field' => 'NIK', 'label' => 'NIK', 'rules' => 'required'),
        array('field' => 'kode_unit_kerja', 'label' => 'Kode Unit Kerja', 'rules' => 'required'),
        array('field' => 'education_level_no', 'label' => 'education_level_no', 'rules' => 'required'),
        array('field' => 'education_level_name', 'label' => 'education_level_name', 'rules' => 'required'),
        array('field' => 'education_field_no', 'label' => 'education_field_no', 'rules' => 'required'),
        array('field' => 'education_field_name', 'label' => 'education_field_name', 'rules' => 'required'),
        array('field' => 'location', 'label' => 'location', 'rules' => 'required'),
        array('field' => 'start_year', 'label' => 'start_year', 'rules' => 'required'),
        array('field' => 'end_year', 'label' => 'end_year', 'rules' => 'required'),
        array('field' => 'g_p_a', 'label' => 'g_p_a', 'rules' => 'required'),
        array('field' => 'achievement', 'label' => 'achievement', 'rules' => 'required'),
        array('field' => 'remark', 'label' => 'remark', 'rules' => 'required'),
        array('field' => 'edu_institution_seq_no', 'label' => 'edu_institution_seq_no', 'rules' => 'required'),
        array('field' => 'edu_institution_name', 'label' => 'edu_institution_name', 'rules' => 'required'),
        array('field' => 'education_lvl_received', 'label' => 'education_lvl_received', 'rules' => 'required'),
        array('field' => 'prefered_education', 'label' => 'prefered_education', 'rules' => 'required'),
        array('field' => 'rowversion', 'label' => 'rowversion', 'rules' => 'required'),
        array('field' => 'anik_baru', 'label' => 'anik_baru', 'rules' => 'required'),
    ),
    'pendidikan_ubah' => array(
        array('field' => 'NIK', 'label' => 'NIK', 'rules' => 'required'),
        array('field' => 'kode_unit_kerja', 'label' => 'Kode Unit Kerja', 'rules' => 'required'),
        array('field' => 'education_level_no', 'label' => 'education_level_no', 'rules' => 'required'),
        array('field' => 'education_level_name', 'label' => 'education_level_name', 'rules' => 'required'),
        array('field' => 'education_field_no', 'label' => 'education_field_no', 'rules' => 'required'),
        array('field' => 'education_field_name', 'label' => 'education_field_name', 'rules' => 'required'),
        array('field' => 'location', 'label' => 'location', 'rules' => 'required'),
        array('field' => 'start_year', 'label' => 'start_year', 'rules' => 'required'),
        array('field' => 'end_year', 'label' => 'end_year', 'rules' => 'required'),
        array('field' => 'g_p_a', 'label' => 'g_p_a', 'rules' => 'required'),
        array('field' => 'achievement', 'label' => 'achievement', 'rules' => 'required'),
        array('field' => 'remark', 'label' => 'remark', 'rules' => 'required'),
        array('field' => 'edu_institution_seq_no', 'label' => 'edu_institution_seq_no', 'rules' => 'required'),
        array('field' => 'edu_institution_name', 'label' => 'edu_institution_name', 'rules' => 'required'),
        array('field' => 'education_lvl_received', 'label' => 'education_lvl_received', 'rules' => 'required'),
        array('field' => 'prefered_education', 'label' => 'prefered_education', 'rules' => 'required'),
        array('field' => 'rowversion', 'label' => 'rowversion', 'rules' => 'required'),
        array('field' => 'anik_baru', 'label' => 'anik_baru', 'rules' => 'required'),
    ),

    'pengalaman_kerja_simpan' => array(
        array('field' => 'NIK', 'label' => 'NIK', 'rules' => 'required'),
        array('field' => 'kode_unit_kerja', 'label' => 'kode_unit_kerja', 'rules' => 'required'),
        array('field' => 'no_sk', 'label' => 'no_sk', 'rules' => 'required'),
        array('field' => 'tgl_sk', 'label' => 'tgl_sk', 'rules' => 'required'),
        array('field' => 'ma_tmt', 'label' => 'ma_tmt', 'rules' => 'required'),
        array('field' => 'mkt_gol', 'label' => 'mkt_gol', 'rules' => 'required'),
        array('field' => 'mkb_gol', 'label' => 'mkb_gol', 'rules' => 'required'),
        array('field' => 'kode_update', 'label' => 'kode_update', 'rules' => 'required'),
        array('field' => 'nm_jbt', 'label' => 'nm_jbt', 'rules' => 'required'),
        array('field' => 'nm_pl', 'label' => 'nm_pl', 'rules' => 'required'),
        array('field' => 'nm_ru', 'label' => 'nm_ru', 'rules' => 'required'),
        array('field' => 'nm_si', 'label' => 'nm_si', 'rules' => 'required'),
        array('field' => 'nm_bag', 'label' => 'nm_bag', 'rules' => 'required'),
        array('field' => 'nm_dep', 'label' => 'nm_dep', 'rules' => 'required'),
        array('field' => 'nm_kom', 'label' => 'nm_kom', 'rules' => 'required'),
        array('field' => 'nm_dir', 'label' => 'nm_dir', 'rules' => 'required'),
        array('field' => 'keterangan', 'label' => 'keterangan', 'rules' => 'required')
    ),
    'pengalaman_kerja_ubah' => array(
        array('field' => 'NIK', 'label' => 'NIK', 'rules' => 'required'),
        array('field' => 'kode_unit_kerja', 'label' => 'kode_unit_kerja', 'rules' => 'required'),
        array('field' => 'no_sk', 'label' => 'no_sk', 'rules' => 'required'),
        array('field' => 'tgl_sk', 'label' => 'tgl_sk', 'rules' => 'required'),
        array('field' => 'ma_tmt', 'label' => 'ma_tmt', 'rules' => 'required'),
        array('field' => 'mkt_gol', 'label' => 'mkt_gol', 'rules' => 'required'),
        array('field' => 'mkb_gol', 'label' => 'mkb_gol', 'rules' => 'required'),
        array('field' => 'kode_update', 'label' => 'kode_update', 'rules' => 'required'),
        array('field' => 'nm_jbt', 'label' => 'nm_jbt', 'rules' => 'required'),
        array('field' => 'nm_pl', 'label' => 'nm_pl', 'rules' => 'required'),
        array('field' => 'nm_ru', 'label' => 'nm_ru', 'rules' => 'required'),
        array('field' => 'nm_si', 'label' => 'nm_si', 'rules' => 'required'),
        array('field' => 'nm_bag', 'label' => 'nm_bag', 'rules' => 'required'),
        array('field' => 'nm_dep', 'label' => 'nm_dep', 'rules' => 'required'),
        array('field' => 'nm_kom', 'label' => 'nm_kom', 'rules' => 'required'),
        array('field' => 'nm_dir', 'label' => 'nm_dir', 'rules' => 'required'),
        array('field' => 'keterangan', 'label' => 'keterangan', 'rules' => 'required')
    ),

    'training_simpan' => array(
        array('field' => 'NIK', 'label' => 'NIK', 'rules' => 'required'),
        array('field' => 'kode_unit_kerja', 'label' => 'kode_unit_kerja', 'rules' => 'required'),
        array('field' => 'training_event_id', 'label' => 'training_event_id', 'rules' => 'required'),
        array('field' => 'course_id', 'label' => 'course_id', 'rules' => 'required'),
        array('field' => 'nama_training', 'label' => 'nama_training', 'rules' => 'required'),
        array('field' => 'topik', 'label' => 'topik', 'rules' => 'required'),
        array('field' => 'durasi', 'label' => 'durasi', 'rules' => 'required'),
        array('field' => 'start_date', 'label' => 'start_date', 'rules' => 'required'),
        array('field' => 'end_date', 'label' => 'end_date', 'rules' => 'required'),
        array('field' => 'tempat', 'label' => 'tempat', 'rules' => 'required'),
        array('field' => 'penyelenggara', 'label' => 'penyelenggara', 'rules' => 'required')
    ),

    'training_ubah' => array(
        array('field' => 'NIK', 'label' => 'NIK', 'rules' => 'required'),
        array('field' => 'kode_unit_kerja', 'label' => 'kode_unit_kerja', 'rules' => 'required'),
        array('field' => 'training_event_id', 'label' => 'training_event_id', 'rules' => 'required'),
        array('field' => 'course_id', 'label' => 'course_id', 'rules' => 'required'),
        array('field' => 'nama_training', 'label' => 'nama_training', 'rules' => 'required'),
        array('field' => 'topik', 'label' => 'topik', 'rules' => 'required'),
        array('field' => 'durasi', 'label' => 'durasi', 'rules' => 'required'),
        array('field' => 'start_date', 'label' => 'start_date', 'rules' => 'required'),
        array('field' => 'end_date', 'label' => 'end_date', 'rules' => 'required'),
        array('field' => 'tempat', 'label' => 'tempat', 'rules' => 'required'),
        array('field' => 'penyelenggara', 'label' => 'penyelenggara', 'rules' => 'required')
    ),

    'sertifikasi_simpan' => array(
        array('field' => 'NIK', 'label' => 'NIK', 'rules' => 'required'),
        array('field' => 'kode_unit_kerja', 'label' => 'kode_unit_kerja', 'rules' => 'required'),
        array('field' => 'training_event_id', 'label' => 'training_event_id', 'rules' => 'required'),
        array('field' => 'course_id', 'label' => 'course_id', 'rules' => 'required'),
        array('field' => 'nama_training', 'label' => 'nama_training', 'rules' => 'required'),
        array('field' => 'topik', 'label' => 'topik', 'rules' => 'required'),
        array('field' => 'durasi', 'label' => 'durasi', 'rules' => 'required'),
        array('field' => 'start_date', 'label' => 'start_date', 'rules' => 'required'),
        array('field' => 'end_date', 'label' => 'end_date', 'rules' => 'required'),
        array('field' => 'tempat', 'label' => 'tempat', 'rules' => 'required'),
        array('field' => 'penyelenggara', 'label' => 'penyelenggara', 'rules' => 'required')
    ),

    'sertifikasi_ubah' => array(
        array('field' => 'NIK', 'label' => 'NIK', 'rules' => 'required'),
        array('field' => 'kode_unit_kerja', 'label' => 'kode_unit_kerja', 'rules' => 'required'),
        array('field' => 'training_event_id', 'label' => 'training_event_id', 'rules' => 'required'),
        array('field' => 'course_id', 'label' => 'course_id', 'rules' => 'required'),
        array('field' => 'nama_training', 'label' => 'nama_training', 'rules' => 'required'),
        array('field' => 'topik', 'label' => 'topik', 'rules' => 'required'),
        array('field' => 'durasi', 'label' => 'durasi', 'rules' => 'required'),
        array('field' => 'start_date', 'label' => 'start_date', 'rules' => 'required'),
        array('field' => 'end_date', 'label' => 'end_date', 'rules' => 'required'),
        array('field' => 'tempat', 'label' => 'tempat', 'rules' => 'required'),
        array('field' => 'penyelenggara', 'label' => 'penyelenggara', 'rules' => 'required')
    ),

    'private_message_simpan' => array(
        array('field' => 'pengirim', 'label' => 'pengirim', 'rules' => 'required'),
        array('field' => 'penerima', 'label' => 'penerima', 'rules' => 'required'),
        array('field' => 'judul', 'label' => 'judul', 'rules' => 'required'),
        array('field' => 'pesan', 'label' => 'pesan', 'rules' => 'required'),
    ),

    'private_message_ubah' => array(
        array('field' => 'pengirim', 'label' => 'pengirim', 'rules' => 'required'),
        array('field' => 'penerima', 'label' => 'penerima', 'rules' => 'required'),
        array('field' => 'judul', 'label' => 'judul', 'rules' => 'required'),
        array('field' => 'pesan', 'label' => 'pesan', 'rules' => 'required'),
    ),


    // User access validation
    'action_status_simpan' => array(
        array('field' => 'user_status', 'label' => 'Status', 'rules' => 'required'),
    ),
    'action_status_ubah' => array(
        array('field' => 'user_status', 'label' => 'Status', 'rules' => 'required'),
    ),

    'action_komentar_simpan' => array(
        array('field' => 'komentar', 'label' => 'Komentar', 'rules' => 'required'),
    ),
    'action_komentar_ubah' => array(
        array('field' => 'komentar', 'label' => 'Komentar', 'rules' => 'required'),
    ),


    'action_group_status_simpan' => array(
        array('field' => 'user_status', 'label' => 'Status', 'rules' => 'required'),
    ),
    'action_group_status_ubah' => array(
        array('field' => 'user_status', 'label' => 'Status', 'rules' => 'required'),
    ),

    'action_group_komentar_simpan' => array(
        array('field' => 'komentar', 'label' => 'Komentar', 'rules' => 'required'),
    ),
    'action_group_komentar_ubah' => array(
        array('field' => 'komentar', 'label' => 'Komentar', 'rules' => 'required'),
    ),

    'profile_pendidikan_simpan' => array(
        array('field' => 'education_level_no', 'label' => 'education_level_no', 'rules' => 'required'),
        array('field' => 'education_level_name', 'label' => 'education_level_name', 'rules' => 'required'),
        array('field' => 'education_field_no', 'label' => 'education_field_no', 'rules' => 'required'),
        array('field' => 'education_field_name', 'label' => 'education_field_name', 'rules' => 'required'),
        array('field' => 'location', 'label' => 'location', 'rules' => 'required'),
        array('field' => 'start_year', 'label' => 'start_year', 'rules' => 'required'),
        array('field' => 'end_year', 'label' => 'end_year', 'rules' => 'required'),
        array('field' => 'g_p_a', 'label' => 'g_p_a', 'rules' => 'required'),
        array('field' => 'achievement', 'label' => 'achievement', 'rules' => 'required'),
        array('field' => 'remark', 'label' => 'remark', 'rules' => 'required'),
        array('field' => 'edu_institution_seq_no', 'label' => 'edu_institution_seq_no', 'rules' => 'required'),
        array('field' => 'edu_institution_name', 'label' => 'edu_institution_name', 'rules' => 'required'),
        array('field' => 'education_lvl_received', 'label' => 'education_lvl_received', 'rules' => 'required'),
        array('field' => 'prefered_education', 'label' => 'prefered_education', 'rules' => 'required'),
        array('field' => 'rowversion', 'label' => 'rowversion', 'rules' => 'required'),
        array('field' => 'anik_baru', 'label' => 'anik_baru', 'rules' => 'required'),
    ),
    'profile_pendidikan_ubah' => array(
        array('field' => 'education_level_no', 'label' => 'education_level_no', 'rules' => 'required'),
        array('field' => 'education_level_name', 'label' => 'education_level_name', 'rules' => 'required'),
        array('field' => 'education_field_no', 'label' => 'education_field_no', 'rules' => 'required'),
        array('field' => 'education_field_name', 'label' => 'education_field_name', 'rules' => 'required'),
        array('field' => 'location', 'label' => 'location', 'rules' => 'required'),
        array('field' => 'start_year', 'label' => 'start_year', 'rules' => 'required'),
        array('field' => 'end_year', 'label' => 'end_year', 'rules' => 'required'),
        array('field' => 'g_p_a', 'label' => 'g_p_a', 'rules' => 'required'),
        array('field' => 'achievement', 'label' => 'achievement', 'rules' => 'required'),
        array('field' => 'remark', 'label' => 'remark', 'rules' => 'required'),
        array('field' => 'edu_institution_seq_no', 'label' => 'edu_institution_seq_no', 'rules' => 'required'),
        array('field' => 'edu_institution_name', 'label' => 'edu_institution_name', 'rules' => 'required'),
        array('field' => 'education_lvl_received', 'label' => 'education_lvl_received', 'rules' => 'required'),
        array('field' => 'prefered_education', 'label' => 'prefered_education', 'rules' => 'required'),
        array('field' => 'rowversion', 'label' => 'rowversion', 'rules' => 'required'),
        array('field' => 'anik_baru', 'label' => 'anik_baru', 'rules' => 'required'),
    ),

    'profile_pengalaman_kerja_simpan' => array(
        array('field' => 'no_sk', 'label' => 'no_sk', 'rules' => 'required'),
        array('field' => 'tgl_sk', 'label' => 'tgl_sk', 'rules' => 'required'),
        array('field' => 'ma_tmt', 'label' => 'ma_tmt', 'rules' => 'required'),
        array('field' => 'mkt_gol', 'label' => 'mkt_gol', 'rules' => 'required'),
        array('field' => 'mkb_gol', 'label' => 'mkb_gol', 'rules' => 'required'),
        array('field' => 'kode_update', 'label' => 'kode_update', 'rules' => 'required'),
        array('field' => 'nm_jbt', 'label' => 'nm_jbt', 'rules' => 'required'),
        array('field' => 'nm_pl', 'label' => 'nm_pl', 'rules' => 'required'),
        array('field' => 'nm_ru', 'label' => 'nm_ru', 'rules' => 'required'),
        array('field' => 'nm_si', 'label' => 'nm_si', 'rules' => 'required'),
        array('field' => 'nm_bag', 'label' => 'nm_bag', 'rules' => 'required'),
        array('field' => 'nm_dep', 'label' => 'nm_dep', 'rules' => 'required'),
        array('field' => 'nm_kom', 'label' => 'nm_kom', 'rules' => 'required'),
        array('field' => 'nm_dir', 'label' => 'nm_dir', 'rules' => 'required'),
        array('field' => 'keterangan', 'label' => 'keterangan', 'rules' => 'required')
    ),
    'profile_pengalaman_kerja_ubah' => array(
        array('field' => 'no_sk', 'label' => 'no_sk', 'rules' => 'required'),
        array('field' => 'tgl_sk', 'label' => 'tgl_sk', 'rules' => 'required'),
        array('field' => 'ma_tmt', 'label' => 'ma_tmt', 'rules' => 'required'),
        array('field' => 'mkt_gol', 'label' => 'mkt_gol', 'rules' => 'required'),
        array('field' => 'mkb_gol', 'label' => 'mkb_gol', 'rules' => 'required'),
        array('field' => 'kode_update', 'label' => 'kode_update', 'rules' => 'required'),
        array('field' => 'nm_jbt', 'label' => 'nm_jbt', 'rules' => 'required'),
        array('field' => 'nm_pl', 'label' => 'nm_pl', 'rules' => 'required'),
        array('field' => 'nm_ru', 'label' => 'nm_ru', 'rules' => 'required'),
        array('field' => 'nm_si', 'label' => 'nm_si', 'rules' => 'required'),
        array('field' => 'nm_bag', 'label' => 'nm_bag', 'rules' => 'required'),
        array('field' => 'nm_dep', 'label' => 'nm_dep', 'rules' => 'required'),
        array('field' => 'nm_kom', 'label' => 'nm_kom', 'rules' => 'required'),
        array('field' => 'nm_dir', 'label' => 'nm_dir', 'rules' => 'required'),
        array('field' => 'keterangan', 'label' => 'keterangan', 'rules' => 'required')
    ),

    'profile_training_simpan' => array(
        array('field' => 'training_event_id', 'label' => 'training_event_id', 'rules' => 'required'),
        array('field' => 'course_id', 'label' => 'course_id', 'rules' => 'required'),
        array('field' => 'nama_training', 'label' => 'nama_training', 'rules' => 'required'),
        array('field' => 'topik', 'label' => 'topik', 'rules' => 'required'),
        array('field' => 'durasi', 'label' => 'durasi', 'rules' => 'required'),
        array('field' => 'start_date', 'label' => 'start_date', 'rules' => 'required'),
        array('field' => 'end_date', 'label' => 'end_date', 'rules' => 'required'),
        array('field' => 'tempat', 'label' => 'tempat', 'rules' => 'required'),
        array('field' => 'penyelenggara', 'label' => 'penyelenggara', 'rules' => 'required')
    ),

    'profile_training_ubah' => array(
        array('field' => 'training_event_id', 'label' => 'training_event_id', 'rules' => 'required'),
        array('field' => 'course_id', 'label' => 'course_id', 'rules' => 'required'),
        array('field' => 'nama_training', 'label' => 'nama_training', 'rules' => 'required'),
        array('field' => 'topik', 'label' => 'topik', 'rules' => 'required'),
        array('field' => 'durasi', 'label' => 'durasi', 'rules' => 'required'),
        array('field' => 'start_date', 'label' => 'start_date', 'rules' => 'required'),
        array('field' => 'end_date', 'label' => 'end_date', 'rules' => 'required'),
        array('field' => 'tempat', 'label' => 'tempat', 'rules' => 'required'),
        array('field' => 'penyelenggara', 'label' => 'penyelenggara', 'rules' => 'required')
    ),

    'profile_sertifikasi_simpan' => array(
        array('field' => 'training_event_id', 'label' => 'training_event_id', 'rules' => 'required'),
        array('field' => 'course_id', 'label' => 'course_id', 'rules' => 'required'),
        array('field' => 'nama_training', 'label' => 'nama_training', 'rules' => 'required'),
        array('field' => 'topik', 'label' => 'topik', 'rules' => 'required'),
        array('field' => 'durasi', 'label' => 'durasi', 'rules' => 'required'),
        array('field' => 'start_date', 'label' => 'start_date', 'rules' => 'required'),
        array('field' => 'end_date', 'label' => 'end_date', 'rules' => 'required'),
        array('field' => 'tempat', 'label' => 'tempat', 'rules' => 'required'),
        array('field' => 'penyelenggara', 'label' => 'penyelenggara', 'rules' => 'required')
    ),

    'profile_sertifikasi_ubah' => array(
        array('field' => 'training_event_id', 'label' => 'training_event_id', 'rules' => 'required'),
        array('field' => 'course_id', 'label' => 'course_id', 'rules' => 'required'),
        array('field' => 'nama_training', 'label' => 'nama_training', 'rules' => 'required'),
        array('field' => 'topik', 'label' => 'topik', 'rules' => 'required'),
        array('field' => 'durasi', 'label' => 'durasi', 'rules' => 'required'),
        array('field' => 'start_date', 'label' => 'start_date', 'rules' => 'required'),
        array('field' => 'end_date', 'label' => 'end_date', 'rules' => 'required'),
        array('field' => 'tempat', 'label' => 'tempat', 'rules' => 'required'),
        array('field' => 'penyelenggara', 'label' => 'penyelenggara', 'rules' => 'required')
    ),

    'profile_minat' => array(
        array('field' => 'minat[]', 'label' => 'minat', 'rules' => 'required'),
    ),

    'private_message' => array(
        array('field' => 'penerima', 'label' => 'penerima', 'rules' => 'required'),
        array('field' => 'judul', 'label' => 'judul', 'rules' => 'required'),
        array('field' => 'pesan', 'label' => 'pesan', 'rules' => 'required'),
    ),
);