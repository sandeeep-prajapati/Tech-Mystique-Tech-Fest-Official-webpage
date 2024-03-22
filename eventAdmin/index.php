<?php
session_start();
require '../admin/connect.php';
            $query1 = "SELECT SELECT 
            main_events.eid AS event_id,
            main_events.name AS event_name,
            main_events.description AS event_description,
            main_events.type AS event_type,
            main_events.time AS event_time,
            main_events.winner AS event_winner,
            main_events.runnerup AS event_runnerup,
            main_events.registrationfee AS event_registration_fee,
            main_events.date AS event_date,
            main_events.email AS event_email,
            tokenregistration.id AS token_registration_id,
            tokenregistration.eid AS token_event_id,
            tokenregistration.token AS registration_token,
            externalparticipents.id AS participant_id,
            externalparticipents.name AS participant_name,
            externalparticipents.contact AS participant_contact,
            externalparticipents.email AS participant_email,
            externalparticipents.adharcard AS participant_adharcard,
            externalparticipents.dob AS participant_dob,
            externalparticipents.collegeName AS participant_college_name 
             
            FROM main_events, tokenregistration, externalparticipents 
            where tokenregistration.token = (SELECT tokenregistration.token 
            WHERE tokenregistration.eid = main_events.eid);";
            $exe1 = mysqli_query($dbc, $query1);
            while ($row1 = mysqli_fetch_array($exe1)) {
                $event_name = $row1['event_name'];
                $event_description = $row1['event_description'];
                echo "
                <tr>
                    <td>" . $event_name . "</td>
                    <td>" . $event_name . "</td>
                    

                <td>
                <a href='../components/user/update.php?token='>
                    <button type='button' class='btn btn-info'>Edit</button>
                </a>
                <a href='../components/user/delete.php?token='>
                    <button type='button' class='btn btn-danger btn-xs'>Delete</button>
                </a>
            </td>
        </tr>";
    }

?>
<!DOCTYPE html>
    <html lang="zxx">

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Manup Template">
        <meta name="keywords" content="Manup, unica, creative, html">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Parampara 2K24</title>

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Madimi+One&display=swap');

            .madimi-one-regular {
                font-family: "Madimi One", sans-serif;
                font-weight: 400;
                font-style: normal;
            }
        </style>
        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600,700,800,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap" rel="stylesheet">


        <!-- Css Styles -->
        <link rel="stylesheet" href="../home/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="../home/css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="../home/css/elegant-icons.css" type="text/css">
        <link rel="stylesheet" href="../home/css/owl.carousel.min.css" type="text/css">
        <link rel="stylesheet" href="../home/css/magnific-popup.css" type="text/css">
        <link rel="stylesheet" href="../home/css/slicknav.min.css" type="text/css">
        <link rel="stylesheet" href="../home/css/style.css" type="text/css">
</head>

    <title>Event_Admin page</title>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../admin/home.css">
</body>
<?php
    require '../usercomponents/mainnav.php';
?>  




<?php
    require '../usercomponents/mainFooter.php';
?>
    <script src="../home/js/jquery-3.3.1.min.js"></script>
    <script src="../home/js/bootstrap.min.js"></script>
    <script src="../home/js/jquery.magnific-popup.min.js"></script>
    <script src="../home/js/jquery.countdown.min.js"></script>
    <script src="../home/js/jquery.slicknav.js"></script>
    <script src="../home/js/owl.carousel.min.js"></script>
    <script src="../home/js/main.js"></script>
</body>
</html>