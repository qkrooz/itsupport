<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
// Esta funcion recibe strings
// loguser: ya esta dado por el authentication.
// mail_action: add, delete, modified.
// page_section: inventory, o miscellaneous.
// mail_section: Desktops, Laptops, Label Printers, Laser Printers, Nodes, Mouses, Keyboards, Webcams, Toners, Monitores.

include 'authentication.php';
function sendmail($loguser, $page_section, $mail_section, $mail_action, $data){
    include 'authentication.php';
    //EMAIL DATA
    $date = date("d-m-Y");
    $time = date('H:i:s'); 
    $from = "ITSUPPORT_PAGE@ge.com";
    $headers = "From:" . $from ."\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset: utf-8\n";
    //DEFINIENDO EL ASUNTO DEL MAIL Y EL MENSAJE
    switch($page_section){
        case 'inventory':
            switch($mail_action){
                case 'add':
                    $subject = $loguser . " added an item on ". $mail_section;
                    $message = '
                            <html xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:w="urn:schemas-microsoft-com:office:word" xmlns:m="http://schemas.microsoft.com/office/2004/12/omml" xmlns="http://www.w3.org/TR/REC-html40">
                                <head><meta http-equiv=Content-Type content="text/html; charset=utf-8"><meta name=Generator content="Microsoft Word 15 (filtered medium)"><!--[if !mso]><style>v\:* {behavior:url(#default#VML);}
                                o\:* {behavior:url(#default#VML);}
                                w\:* {behavior:url(#default#VML);}
                                .shape {behavior:url(#default#VML);}
                                </style><![endif]--><style><!--
                                /* Font Definitions */
                                @font-face
                                    {font-family:"Cambria Math";
                                    panose-1:2 4 5 3 5 4 6 3 2 4;}
                                @font-face
                                    {font-family:Calibri;
                                    panose-1:2 15 5 2 2 2 4 3 2 4;}
                                @font-face
                                    {font-family:ge-inspira;}
                                @font-face
                                    {font-family:ge-sans;}
                                /* Style Definitions */
                                p.MsoNormal, li.MsoNormal, div.MsoNormal
                                    {margin:0in;
                                    margin-bottom:.0001pt;
                                    font-size:11.0pt;
                                    font-family:"Calibri",sans-serif;}
                                h1
                                    {mso-style-priority:9;
                                    mso-style-link:"Heading 1 Char";
                                    mso-margin-top-alt:auto;
                                    margin-right:0in;
                                    mso-margin-bottom-alt:auto;
                                    margin-left:0in;
                                    font-size:24.0pt;
                                    font-family:"Calibri",sans-serif;}
                                a:link, span.MsoHyperlink
                                    {mso-style-priority:99;
                                    color:#0563C1;
                                    text-decoration:underline;}
                                a:visited, span.MsoHyperlinkFollowed
                                    {mso-style-priority:99;
                                    color:#954F72;
                                    text-decoration:underline;}
                                p.msonormal0, li.msonormal0, div.msonormal0
                                    {mso-style-name:msonormal;
                                    mso-margin-top-alt:auto;
                                    margin-right:0in;
                                    mso-margin-bottom-alt:auto;
                                    margin-left:0in;
                                    font-size:11.0pt;
                                    font-family:"Calibri",sans-serif;}
                                span.Heading1Char
                                    {mso-style-name:"Heading 1 Char";
                                    mso-style-priority:9;
                                    mso-style-link:"Heading 1";
                                    font-family:"Calibri Light",sans-serif;
                                    color:#2F5496;}
                                span.subhead
                                    {mso-style-name:subhead;}
                                span.EmailStyle21
                                    {mso-style-type:personal-reply;
                                    font-family:"Calibri",sans-serif;
                                    color:windowtext;}
                                .MsoChpDefault
                                    {mso-style-type:export-only;
                                    font-size:10.0pt;}
                                @page WordSection1
                                    {size:8.5in 11.0in;
                                    margin:1.0in 1.0in 1.0in 1.0in;}
                                div.WordSection1
                                    {page:WordSection1;}
                                --></style><!--[if gte mso 9]><xml>
                                <o:shapedefaults v:ext="edit" spidmax="1026" />
                                </xml><![endif]--><!--[if gte mso 9]><xml>
                                <o:shapelayout v:ext="edit">
                                <o:idmap v:ext="edit" data="1" />
                                </o:shapelayout></xml><![endif]-->
                                </head>
                                <body bgcolor="#F2F2F2" lang=ES-MX link="#0563C1" vlink="#954F72">
                                    <p class=MsoNormal><o:p>&nbsp;</o:p></p>
                                    <div align=center>
                                        <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width="100%" style="width:100.0%;background:#F0F1F2;border-collapse:collapse">
                                            <tr>
                                                <td width="100%" style="width:100.0%;padding:15.0pt 15.0pt 15.0pt 15.0pt">
                                                    <div align=center>
                                                        <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=800 style="width:600.0pt;border-collapse:collapse">
                                                            <tr>
                                                                <td style="padding:0in 0in 0in 0in">
                                                                    <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width="100%" style="width:100.0%;background:#1261A0;border-collapse:collapse">
                                                                        <tr>
                                                                            <td valign=top style="padding:24.0pt 30.0pt 0in 30.0pt">
                                                                                <h1 style="mso-margin-top-alt:0in;margin-right:0in;margin-bottom:7.5pt;margin-left:0in">
                                                                                    <span style="font-size:30.0pt;font-family:ge-inspira;color:white;font-weight:normal">IT SUPPORT PAGE<br><br></span>
                                                                                    <span class=subhead>
                                                                                        <span style="font-size:15.0pt;font-family:ge-inspira;color:white;font-weight:normal">Inventory</span>
                                                                                    </span>
                                                                                    <span style="font-size:30.0pt;font-family:ge-inspira;color:white;font-weight:normal"><o:p></o:p></span>
                                                                                </h1>
                                                                            </td>
                                                                            <td width=96 valign=center style="width:1.0in;padding:13.5pt 30.0pt 0in 16.5pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100">
                                                                                <p class=MsoNormal>
                                                                                    <b>
                                                                                        <span style="font-size:15.0pt;font-family:ge-inspira;color:white">
                                                                                            <img width=90 height=90 style="width:1.0in;height:1.4687in" id=headerLogo src="http://mxcjsbak01/IT_Support/img/gelogocolor.png"><o:p></o:p>
                                                                                        </span>
                                                                                    </b>
                                                                                </p>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="padding:0in 0in 0in 0in;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                                                                    <div align=center>
                                                                        <table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width="100%" style="width:100.0%;background:white;border-collapse:collapse;border:none;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%" id=templateBody>
                                                                            <tr>
                                                                                <td style="border:none;padding:0in 0in 0in 0in;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                                                                                    <h1 style="mso-margin-top-alt:0in;margin-right:0in;margin-bottom:3pt;margin-left:1in">
                                                                                        <span class=subhead>
                                                                                            <span style="font-size:15.0pt;font-family:ge-inspira;color:Black;font-weight:normal"><strong>'.$subject.'</strong></span>
                                                                                        </span>
                                                                                        <span style="font-size:30.0pt;font-family:ge-inspira;color:white;font-weight:normal"><o:p></o:p></span>
                                                                                    </h1>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td style="border:none;padding:27.75pt 30.0pt 15.75pt 30.0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                                                                                    <table class=MsoNormalTable border=0 cellpadding=0 width="100%" style="width:100.0%">
                                                                                        <tr>
                                                                                            <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                                                                <p class=MsoNormal>
                                                                                                    <strong>
                                                                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Date & Time</span>
                                                                                                    </strong>
                                                                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                                                                    <o:p></o:p>
                                                                                                    </span>
                                                                                                </p>
                                                                                            </td>
                                                                                            <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                                                                <p class=MsoNormal>
                                                                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$date.' / '.$time.'<o:p></o:p>
                                                                                                    </span>
                                                                                                </p>
                                                                                            </td>
                                                                                        </tr>';
                    switch ($mail_section) {
                        case 'Desktops':
                            $message .= '
                                    <tr>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <strong>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Brand</span>
                                                </strong>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                    <o:p></o:p>
                                                </span>
                                            </p>
                                        </td>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[0].'<o:p></o:p></span>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <strong>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Model</span>
                                                </strong>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                    <o:p></o:p>
                                                </span>
                                            </p>
                                        </td>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[1].'<o:p></o:p></span>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <strong>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Service Tag</span>
                                                </strong>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                    <o:p></o:p>
                                                </span>
                                            </p>
                                        </td>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[2].'<o:p></o:p></span>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <strong>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Location</span>
                                                </strong>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                    <o:p></o:p>
                                                </span>
                                            </p>
                                        </td>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[3].'<o:p></o:p></span>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <strong>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Area</span>
                                                </strong>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                    <o:p></o:p>
                                                </span>
                                            </p>
                                        </td>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[4].'<o:p></o:p></span>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <strong>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">OS</span>
                                                </strong>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                    <o:p></o:p>
                                                </span>
                                            </p>
                                        </td>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[5].'<o:p></o:p></span>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <strong>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Specs</span>
                                                </strong>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                    <o:p></o:p>
                                                </span>
                                            </p>
                                        </td>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[6].'<o:p></o:p></span>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <strong>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Hostname</span>
                                                </strong>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                    <o:p></o:p>
                                                </span>
                                            </p>
                                        </td>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[7].'<o:p></o:p></span>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <strong>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Country</span>
                                                </strong>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                    <o:p></o:p>
                                                </span>
                                            </p>
                                        </td>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[8].'<o:p></o:p></span>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <strong>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">User Name</span>
                                                </strong>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                    <o:p></o:p>
                                                </span>
                                            </p>
                                        </td>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[9].'<o:p></o:p></span>
                                            </p>
                                        </td>
                                    </tr>
                            ';
                            break;
                        case 'Laptops':
                            $message .=    '<tr>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <strong>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Brand</span>
                                                </strong>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                    <o:p></o:p>
                                                </span>
                                            </p>
                                        </td>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[0].'<o:p></o:p></span>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <strong>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Model</span>
                                                </strong>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                    <o:p></o:p>
                                                </span>
                                            </p>
                                        </td>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[1].'<o:p></o:p></span>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <strong>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Service Tag</span>
                                                </strong>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                    <o:p></o:p>
                                                </span>
                                            </p>
                                        </td>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[2].'<o:p></o:p></span>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <strong>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">SSO</span>
                                                </strong>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                    <o:p></o:p>
                                                </span>
                                            </p>
                                        </td>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[3].'<o:p></o:p></span>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <strong>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">User Name</span>
                                                </strong>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                    <o:p></o:p>
                                                </span>
                                            </p>
                                        </td>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[4].'<o:p></o:p></span>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <strong>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Department</span>
                                                </strong>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                    <o:p></o:p>
                                                </span>
                                            </p>
                                        </td>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[5].'<o:p></o:p></span>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <strong>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">OS</span>
                                                </strong>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                    <o:p></o:p>
                                                </span>
                                            </p>
                                        </td>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[6].'<o:p></o:p></span>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <strong>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Specs</span>
                                                </strong>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                    <o:p></o:p>
                                                </span>
                                            </p>
                                        </td>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[7].'<o:p></o:p></span>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <strong>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Hostname</span>
                                                </strong>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                    <o:p></o:p>
                                                </span>
                                            </p>
                                        </td>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[8].'<o:p></o:p></span>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <strong>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Country</span>
                                                </strong>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                    <o:p></o:p>
                                                </span>
                                            </p>
                                        </td>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[9].'<o:p></o:p></span>
                                            </p>
                                        </td>
                                    </tr>';
                                break;
                        case 'Mobiles':
                            $message .= '<tr>
                                    <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                        <p class=MsoNormal>
                                            <strong>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Brand</span>
                                            </strong>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                <o:p></o:p>
                                            </span>
                                        </p>
                                    </td>
                                    <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                        <p class=MsoNormal>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[0].'<o:p></o:p></span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                        <p class=MsoNormal>
                                            <strong>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Model</span>
                                            </strong>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                <o:p></o:p>
                                            </span>
                                        </p>
                                    </td>
                                    <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                        <p class=MsoNormal>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[1].'<o:p></o:p></span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                        <p class=MsoNormal>
                                            <strong>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">IMEI</span>
                                            </strong>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                <o:p></o:p>
                                            </span>
                                        </p>
                                    </td>
                                    <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                        <p class=MsoNormal>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[2].'<o:p></o:p></span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                        <p class=MsoNormal>
                                            <strong>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">SSO</span>
                                            </strong>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                <o:p></o:p>
                                            </span>
                                        </p>
                                    </td>
                                    <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                        <p class=MsoNormal>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[3].'<o:p></o:p></span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                        <p class=MsoNormal>
                                            <strong>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">User Name</span>
                                            </strong>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                <o:p></o:p>
                                            </span>
                                        </p>
                                    </td>
                                    <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                        <p class=MsoNormal>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[4].'<o:p></o:p></span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                        <p class=MsoNormal>
                                            <strong>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Department</span>
                                            </strong>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                <o:p></o:p>
                                            </span>
                                        </p>
                                    </td>
                                    <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                        <p class=MsoNormal>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[5].'<o:p></o:p></span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                        <p class=MsoNormal>
                                            <strong>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Color</span>
                                            </strong>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                <o:p></o:p>
                                            </span>
                                        </p>
                                    </td>
                                    <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                        <p class=MsoNormal>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[6].'<o:p></o:p></span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                        <p class=MsoNormal>
                                            <strong>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Specs</span>
                                            </strong>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                <o:p></o:p>
                                            </span>
                                        </p>
                                    </td>
                                    <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                        <p class=MsoNormal>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[7].'<o:p></o:p></span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                        <p class=MsoNormal>
                                            <strong>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Tel Number</span>
                                            </strong>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                <o:p></o:p>
                                            </span>
                                        </p>
                                    </td>
                                    <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                        <p class=MsoNormal>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[8].'<o:p></o:p></span>
                                        </p>
                                    </td>
                                </tr>';
                            break;
                        case 'Label Printers':
                            $message .= '
                            <tr>
                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                    <p class=MsoNormal>
                                        <strong>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Brand</span>
                                        </strong>
                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                            <o:p></o:p>
                                        </span>
                                    </p>
                                </td>
                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                    <p class=MsoNormal>
                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[0].'<o:p></o:p></span>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                    <p class=MsoNormal>
                                        <strong>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Model</span>
                                        </strong>
                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                            <o:p></o:p>
                                        </span>
                                    </p>
                                </td>
                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                    <p class=MsoNormal>
                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[1].'<o:p></o:p></span>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                    <p class=MsoNormal>
                                        <strong>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Serial Number</span>
                                        </strong>
                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                            <o:p></o:p>
                                        </span>
                                    </p>
                                </td>
                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                    <p class=MsoNormal>
                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[2].'<o:p></o:p></span>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                    <p class=MsoNormal>
                                        <strong>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Location</span>
                                        </strong>
                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                            <o:p></o:p>
                                        </span>
                                    </p>
                                </td>
                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                    <p class=MsoNormal>
                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[3].'<o:p></o:p></span>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                    <p class=MsoNormal>
                                        <strong>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Area</span>
                                        </strong>
                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                            <o:p></o:p>
                                        </span>
                                    </p>
                                </td>
                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                    <p class=MsoNormal>
                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[4].'<o:p></o:p></span>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                    <p class=MsoNormal>
                                        <strong>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">TAG</span>
                                        </strong>
                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                            <o:p></o:p>
                                        </span>
                                    </p>
                                </td>
                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                    <p class=MsoNormal>
                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[5].'<o:p></o:p></span>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                    <p class=MsoNormal>
                                        <strong>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Bartender Name</span>
                                        </strong>
                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                            <o:p></o:p>
                                        </span>
                                    </p>
                                </td>
                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                    <p class=MsoNormal>
                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[6].'<o:p></o:p></span>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                    <p class=MsoNormal>
                                        <strong>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">IP Address</span>
                                        </strong>
                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                            <o:p></o:p>
                                        </span>
                                    </p>
                                </td>
                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                    <p class=MsoNormal>
                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[7].'<o:p></o:p></span>
                                    </p>
                                </td>
                            </tr>
                            ';
                            break;
                        case 'Laser Printers':
                            $message .= '
                                                        <tr>
                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                    <p class=MsoNormal>
                                        <strong>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Brand</span>
                                        </strong>
                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                            <o:p></o:p>
                                        </span>
                                    </p>
                                </td>
                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                    <p class=MsoNormal>
                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[0].'<o:p></o:p></span>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                    <p class=MsoNormal>
                                        <strong>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Model</span>
                                        </strong>
                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                            <o:p></o:p>
                                        </span>
                                    </p>
                                </td>
                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                    <p class=MsoNormal>
                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[1].'<o:p></o:p></span>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                    <p class=MsoNormal>
                                        <strong>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Serial Number</span>
                                        </strong>
                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                            <o:p></o:p>
                                        </span>
                                    </p>
                                </td>
                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                    <p class=MsoNormal>
                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[2].'<o:p></o:p></span>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                    <p class=MsoNormal>
                                        <strong>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Location</span>
                                        </strong>
                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                            <o:p></o:p>
                                        </span>
                                    </p>
                                </td>
                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                    <p class=MsoNormal>
                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[3].'<o:p></o:p></span>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                    <p class=MsoNormal>
                                        <strong>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Area</span>
                                        </strong>
                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                            <o:p></o:p>
                                        </span>
                                    </p>
                                </td>
                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                    <p class=MsoNormal>
                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[4].'<o:p></o:p></span>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                    <p class=MsoNormal>
                                        <strong>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Dahill TAG</span>
                                        </strong>
                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                            <o:p></o:p>
                                        </span>
                                    </p>
                                </td>
                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                    <p class=MsoNormal>
                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[5].'<o:p></o:p></span>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                    <p class=MsoNormal>
                                        <strong>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Network Name</span>
                                        </strong>
                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                            <o:p></o:p>
                                        </span>
                                    </p>
                                </td>
                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                    <p class=MsoNormal>
                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[6].'<o:p></o:p></span>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                    <p class=MsoNormal>
                                        <strong>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">IP Address</span>
                                        </strong>
                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                            <o:p></o:p>
                                        </span>
                                    </p>
                                </td>
                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                    <p class=MsoNormal>
                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[7].'<o:p></o:p></span>
                                    </p>
                                </td>
                            </tr>
                            ';
                            break;
                        case 'IPS':
                            $message .= '
                                                            <tr>
                                    <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                        <p class=MsoNormal>
                                            <strong>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">IP</span>
                                            </strong>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                <o:p></o:p>
                                            </span>
                                        </p>
                                    </td>
                                    <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                        <p class=MsoNormal>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[0].'<o:p></o:p></span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                        <p class=MsoNormal>
                                            <strong>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Device</span>
                                            </strong>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                <o:p></o:p>
                                            </span>
                                        </p>
                                    </td>
                                    <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                        <p class=MsoNormal>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[1].'<o:p></o:p></span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                        <p class=MsoNormal>
                                            <strong>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Location</span>
                                            </strong>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                <o:p></o:p>
                                            </span>
                                        </p>
                                    </td>
                                    <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                        <p class=MsoNormal>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[2].'<o:p></o:p></span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                        <p class=MsoNormal>
                                            <strong>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Area</span>
                                            </strong>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                <o:p></o:p>
                                            </span>
                                        </p>
                                    </td>
                                    <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                        <p class=MsoNormal>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[3].'<o:p></o:p></span>
                                        </p>
                                    </td>
                                </tr>
                            ';
                            break;

                        default:
                            break;
                    }
                    $message .= '</table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="border:none;padding:15.0pt 0in 0in 15.0pt;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%">
                                                <p class=MsoNormal align=center style="text-align:center;line-height:150%">
                                                    <span style="font-size:10.5pt;line-height:150%;font-family:ge-sans;color:#999C9F">This notification has been sent automatically from IT Support Page, please do not reply to this email.<o:p></o:p></span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="border:none;border-bottom:solid #BFC2C5 1.0pt;padding:0in 0in 0in 15.0pt;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%">
                                                <p class=MsoNormal align=center style="text-align:center;line-height:150%">
                                                    <span style="font-size:10.5pt;line-height:150%;font-family:ge-sans;color:#999C9F">© Copyright 2020 General Electric Company<o:p></o:p></span>
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </td>
                        </tr>
                        </table>
                        </div>
                        </td>
                        </tr>
                        </table>
                        </div>
                        <p class=MsoNormal><o:p>&nbsp;</o:p></p>
                        </body>
                        </html>
                        ';
                    break;
                case 'delete':
                    $subject = $loguser . " deleted an item from ". $mail_section;
                    $message = '
                            <html xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:w="urn:schemas-microsoft-com:office:word" xmlns:m="http://schemas.microsoft.com/office/2004/12/omml" xmlns="http://www.w3.org/TR/REC-html40">
                                <head><meta http-equiv=Content-Type content="text/html; charset=utf-8"><meta name=Generator content="Microsoft Word 15 (filtered medium)"><!--[if !mso]><style>v\:* {behavior:url(#default#VML);}
                                o\:* {behavior:url(#default#VML);}
                                w\:* {behavior:url(#default#VML);}
                                .shape {behavior:url(#default#VML);}
                                </style><![endif]--><style><!--
                                /* Font Definitions */
                                @font-face
                                    {font-family:"Cambria Math";
                                    panose-1:2 4 5 3 5 4 6 3 2 4;}
                                @font-face
                                    {font-family:Calibri;
                                    panose-1:2 15 5 2 2 2 4 3 2 4;}
                                @font-face
                                    {font-family:ge-inspira;}
                                @font-face
                                    {font-family:ge-sans;}
                                /* Style Definitions */
                                p.MsoNormal, li.MsoNormal, div.MsoNormal
                                    {margin:0in;
                                    margin-bottom:.0001pt;
                                    font-size:11.0pt;
                                    font-family:"Calibri",sans-serif;}
                                h1
                                    {mso-style-priority:9;
                                    mso-style-link:"Heading 1 Char";
                                    mso-margin-top-alt:auto;
                                    margin-right:0in;
                                    mso-margin-bottom-alt:auto;
                                    margin-left:0in;
                                    font-size:24.0pt;
                                    font-family:"Calibri",sans-serif;}
                                a:link, span.MsoHyperlink
                                    {mso-style-priority:99;
                                    color:#0563C1;
                                    text-decoration:underline;}
                                a:visited, span.MsoHyperlinkFollowed
                                    {mso-style-priority:99;
                                    color:#954F72;
                                    text-decoration:underline;}
                                p.msonormal0, li.msonormal0, div.msonormal0
                                    {mso-style-name:msonormal;
                                    mso-margin-top-alt:auto;
                                    margin-right:0in;
                                    mso-margin-bottom-alt:auto;
                                    margin-left:0in;
                                    font-size:11.0pt;
                                    font-family:"Calibri",sans-serif;}
                                span.Heading1Char
                                    {mso-style-name:"Heading 1 Char";
                                    mso-style-priority:9;
                                    mso-style-link:"Heading 1";
                                    font-family:"Calibri Light",sans-serif;
                                    color:#2F5496;}
                                span.subhead
                                    {mso-style-name:subhead;}
                                span.EmailStyle21
                                    {mso-style-type:personal-reply;
                                    font-family:"Calibri",sans-serif;
                                    color:windowtext;}
                                .MsoChpDefault
                                    {mso-style-type:export-only;
                                    font-size:10.0pt;}
                                @page WordSection1
                                    {size:8.5in 11.0in;
                                    margin:1.0in 1.0in 1.0in 1.0in;}
                                div.WordSection1
                                    {page:WordSection1;}
                                --></style><!--[if gte mso 9]><xml>
                                <o:shapedefaults v:ext="edit" spidmax="1026" />
                                </xml><![endif]--><!--[if gte mso 9]><xml>
                                <o:shapelayout v:ext="edit">
                                <o:idmap v:ext="edit" data="1" />
                                </o:shapelayout></xml><![endif]-->
                                </head>
                                <body bgcolor="#F2F2F2" lang=ES-MX link="#0563C1" vlink="#954F72">
                                    <p class=MsoNormal><o:p>&nbsp;</o:p></p>
                                    <div align=center>
                                        <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width="100%" style="width:100.0%;background:#F0F1F2;border-collapse:collapse">
                                            <tr>
                                                <td width="100%" style="width:100.0%;padding:15.0pt 15.0pt 15.0pt 15.0pt">
                                                    <div align=center>
                                                        <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=800 style="width:600.0pt;border-collapse:collapse">
                                                            <tr>
                                                                <td style="padding:0in 0in 0in 0in">
                                                                    <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width="100%" style="width:100.0%;background:#FC913A;border-collapse:collapse">
                                                                        <tr>
                                                                            <td valign=top style="padding:24.0pt 30.0pt 0in 30.0pt">
                                                                                <h1 style="mso-margin-top-alt:0in;margin-right:0in;margin-bottom:7.5pt;margin-left:0in">
                                                                                    <span style="font-size:30.0pt;font-family:ge-inspira;color:white;font-weight:normal">IT SUPPORT PAGE<br><br></span>
                                                                                    <span class=subhead>
                                                                                        <span style="font-size:15.0pt;font-family:ge-inspira;color:white;font-weight:normal">Inventory</span>
                                                                                    </span>
                                                                                    <span style="font-size:30.0pt;font-family:ge-inspira;color:white;font-weight:normal"><o:p></o:p></span>
                                                                                </h1>
                                                                            </td>
                                                                            <td width=96 valign=center style="width:1.0in;padding:13.5pt 30.0pt 0in 16.5pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100">
                                                                                <p class=MsoNormal>
                                                                                    <b>
                                                                                        <span style="font-size:15.0pt;font-family:ge-inspira;color:white">
                                                                                            <img width=90 height=90 style="width:1.0in;height:1.4687in" id=headerLogo src="http://mxcjsbak01/IT_Support/img/gelogocolor.png"><o:p></o:p>
                                                                                        </span>
                                                                                    </b>
                                                                                </p>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="padding:0in 0in 0in 0in;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                                                                    <div align=center>
                                                                        <table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width="100%" style="width:100.0%;background:white;border-collapse:collapse;border:none;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%" id=templateBody>
                                                                            <tr>
                                                                                <td style="border:none;padding:0in 0in 0in 0in;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                                                                                    <h1 style="mso-margin-top-alt:0in;margin-right:0in;margin-bottom:3pt;margin-left:1in">
                                                                                        <span class=subhead>
                                                                                            <span style="font-size:15.0pt;font-family:ge-inspira;color:Black;font-weight:normal"><strong>'.$subject.'</strong></span>
                                                                                        </span>
                                                                                        <span style="font-size:30.0pt;font-family:ge-inspira;color:white;font-weight:normal"><o:p></o:p></span>
                                                                                    </h1>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td style="border:none;padding:27.75pt 30.0pt 15.75pt 30.0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                                                                                    <table class=MsoNormalTable border=0 cellpadding=0 width="100%" style="width:100.0%">
                                                                                        <tr>
                                                                                            <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                                                                <p class=MsoNormal>
                                                                                                    <strong>
                                                                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Date & Time</span>
                                                                                                    </strong>
                                                                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                                                                    <o:p></o:p>
                                                                                                    </span>
                                                                                                </p>
                                                                                            </td>
                                                                                            <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                                                                <p class=MsoNormal>
                                                                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$date.' / '.$time.'<o:p></o:p>
                                                                                                    </span>
                                                                                                </p>
                                                                                            </td>
                                                                                        </tr>';
                    
                    switch ($mail_section) {
                        case 'Desktops':
                            $message .= '
                                    <tr>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <strong>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Brand</span>
                                                </strong>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                    <o:p></o:p>
                                                </span>
                                            </p>
                                        </td>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[1].'<o:p></o:p></span>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <strong>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Model</span>
                                                </strong>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                    <o:p></o:p>
                                                </span>
                                            </p>
                                        </td>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[2].'<o:p></o:p></span>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <strong>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Service Tag</span>
                                                </strong>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                    <o:p></o:p>
                                                </span>
                                            </p>
                                        </td>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[3].'<o:p></o:p></span>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <strong>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Location</span>
                                                </strong>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                    <o:p></o:p>
                                                </span>
                                            </p>
                                        </td>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[4].'<o:p></o:p></span>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <strong>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Area</span>
                                                </strong>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                    <o:p></o:p>
                                                </span>
                                            </p>
                                        </td>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[5].'<o:p></o:p></span>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <strong>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">OS</span>
                                                </strong>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                    <o:p></o:p>
                                                </span>
                                            </p>
                                        </td>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[6].'<o:p></o:p></span>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <strong>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Specs</span>
                                                </strong>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                    <o:p></o:p>
                                                </span>
                                            </p>
                                        </td>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[7].'<o:p></o:p></span>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <strong>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Hostname</span>
                                                </strong>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                    <o:p></o:p>
                                                </span>
                                            </p>
                                        </td>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[8].'<o:p></o:p></span>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <strong>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Country</span>
                                                </strong>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                    <o:p></o:p>
                                                </span>
                                            </p>
                                        </td>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[9].'<o:p></o:p></span>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <strong>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">User Name</span>
                                                </strong>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                    <o:p></o:p>
                                                </span>
                                            </p>
                                        </td>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.rtrim($data[10], "'").'<o:p></o:p></span>
                                            </p>
                                        </td>
                                    </tr>
                            ';
                            break;
                        case 'Laptops':
                            $message .=    '<tr>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <strong>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Brand</span>
                                                </strong>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                    <o:p></o:p>
                                                </span>
                                            </p>
                                        </td>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[1].'<o:p></o:p></span>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <strong>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Model</span>
                                                </strong>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                    <o:p></o:p>
                                                </span>
                                            </p>
                                        </td>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[2].'<o:p></o:p></span>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <strong>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Service Tag</span>
                                                </strong>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                    <o:p></o:p>
                                                </span>
                                            </p>
                                        </td>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[3].'<o:p></o:p></span>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <strong>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">SSO</span>
                                                </strong>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                    <o:p></o:p>
                                                </span>
                                            </p>
                                        </td>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[4].'<o:p></o:p></span>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <strong>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">User Name</span>
                                                </strong>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                    <o:p></o:p>
                                                </span>
                                            </p>
                                        </td>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[5].'<o:p></o:p></span>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <strong>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Department</span>
                                                </strong>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                    <o:p></o:p>
                                                </span>
                                            </p>
                                        </td>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[6].'<o:p></o:p></span>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <strong>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">OS</span>
                                                </strong>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                    <o:p></o:p>
                                                </span>
                                            </p>
                                        </td>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[7].'<o:p></o:p></span>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <strong>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Specs</span>
                                                </strong>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                    <o:p></o:p>
                                                </span>
                                            </p>
                                        </td>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[8].'<o:p></o:p></span>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <strong>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Hostname</span>
                                                </strong>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                    <o:p></o:p>
                                                </span>
                                            </p>
                                        </td>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[9].'<o:p></o:p></span>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <strong>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Country</span>
                                                </strong>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                    <o:p></o:p>
                                                </span>
                                            </p>
                                        </td>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.rtrim($data[10], "'").'<o:p></o:p></span>
                                            </p>
                                        </td>
                                    </tr>';
                                break;
                        case 'Mobiles':
                            $message .= '<tr>
                                    <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                        <p class=MsoNormal>
                                            <strong>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Brand</span>
                                            </strong>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                <o:p></o:p>
                                            </span>
                                        </p>
                                    </td>
                                    <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                        <p class=MsoNormal>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[1].'<o:p></o:p></span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                        <p class=MsoNormal>
                                            <strong>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Model</span>
                                            </strong>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                <o:p></o:p>
                                            </span>
                                        </p>
                                    </td>
                                    <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                        <p class=MsoNormal>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[2].'<o:p></o:p></span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                        <p class=MsoNormal>
                                            <strong>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">IMEI</span>
                                            </strong>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                <o:p></o:p>
                                            </span>
                                        </p>
                                    </td>
                                    <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                        <p class=MsoNormal>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[3].'<o:p></o:p></span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                        <p class=MsoNormal>
                                            <strong>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">SSO</span>
                                            </strong>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                <o:p></o:p>
                                            </span>
                                        </p>
                                    </td>
                                    <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                        <p class=MsoNormal>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[4].'<o:p></o:p></span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                        <p class=MsoNormal>
                                            <strong>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">User Name</span>
                                            </strong>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                <o:p></o:p>
                                            </span>
                                        </p>
                                    </td>
                                    <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                        <p class=MsoNormal>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[5].'<o:p></o:p></span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                        <p class=MsoNormal>
                                            <strong>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Department</span>
                                            </strong>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                <o:p></o:p>
                                            </span>
                                        </p>
                                    </td>
                                    <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                        <p class=MsoNormal>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[6].'<o:p></o:p></span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                        <p class=MsoNormal>
                                            <strong>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Color</span>
                                            </strong>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                <o:p></o:p>
                                            </span>
                                        </p>
                                    </td>
                                    <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                        <p class=MsoNormal>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[7].'<o:p></o:p></span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                        <p class=MsoNormal>
                                            <strong>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Specs</span>
                                            </strong>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                <o:p></o:p>
                                            </span>
                                        </p>
                                    </td>
                                    <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                        <p class=MsoNormal>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[8].'<o:p></o:p></span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                        <p class=MsoNormal>
                                            <strong>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Tel Number</span>
                                            </strong>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                <o:p></o:p>
                                            </span>
                                        </p>
                                    </td>
                                    <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                        <p class=MsoNormal>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.rtrim($data[9], "'").'<o:p></o:p></span>
                                        </p>
                                    </td>
                                </tr>';
                            break;
                        case 'Label Printers':
                            $message .= '
                            <tr>
                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                    <p class=MsoNormal>
                                        <strong>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Brand</span>
                                        </strong>
                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                            <o:p></o:p>
                                        </span>
                                    </p>
                                </td>
                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                    <p class=MsoNormal>
                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[1].'<o:p></o:p></span>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                    <p class=MsoNormal>
                                        <strong>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Model</span>
                                        </strong>
                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                            <o:p></o:p>
                                        </span>
                                    </p>
                                </td>
                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                    <p class=MsoNormal>
                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[2].'<o:p></o:p></span>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                    <p class=MsoNormal>
                                        <strong>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Serial Number</span>
                                        </strong>
                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                            <o:p></o:p>
                                        </span>
                                    </p>
                                </td>
                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                    <p class=MsoNormal>
                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[3].'<o:p></o:p></span>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                    <p class=MsoNormal>
                                        <strong>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Location</span>
                                        </strong>
                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                            <o:p></o:p>
                                        </span>
                                    </p>
                                </td>
                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                    <p class=MsoNormal>
                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[4].'<o:p></o:p></span>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                    <p class=MsoNormal>
                                        <strong>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Area</span>
                                        </strong>
                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                            <o:p></o:p>
                                        </span>
                                    </p>
                                </td>
                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                    <p class=MsoNormal>
                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[5].'<o:p></o:p></span>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                    <p class=MsoNormal>
                                        <strong>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">TAG</span>
                                        </strong>
                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                            <o:p></o:p>
                                        </span>
                                    </p>
                                </td>
                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                    <p class=MsoNormal>
                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[6].'<o:p></o:p></span>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                    <p class=MsoNormal>
                                        <strong>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Bartender Name</span>
                                        </strong>
                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                            <o:p></o:p>
                                        </span>
                                    </p>
                                </td>
                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                    <p class=MsoNormal>
                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[7].'<o:p></o:p></span>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                    <p class=MsoNormal>
                                        <strong>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">IP Address</span>
                                        </strong>
                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                            <o:p></o:p>
                                        </span>
                                    </p>
                                </td>
                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                    <p class=MsoNormal>
                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.rtrim($data[8], "'").'<o:p></o:p></span>
                                    </p>
                                </td>
                            </tr>
                            ';
                            break;
                        case 'Laser Printers':
                            $message .= '
                                                        <tr>
                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                    <p class=MsoNormal>
                                        <strong>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Brand</span>
                                        </strong>
                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                            <o:p></o:p>
                                        </span>
                                    </p>
                                </td>
                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                    <p class=MsoNormal>
                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[1].'<o:p></o:p></span>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                    <p class=MsoNormal>
                                        <strong>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Model</span>
                                        </strong>
                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                            <o:p></o:p>
                                        </span>
                                    </p>
                                </td>
                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                    <p class=MsoNormal>
                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[2].'<o:p></o:p></span>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                    <p class=MsoNormal>
                                        <strong>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Serial Number</span>
                                        </strong>
                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                            <o:p></o:p>
                                        </span>
                                    </p>
                                </td>
                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                    <p class=MsoNormal>
                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[3].'<o:p></o:p></span>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                    <p class=MsoNormal>
                                        <strong>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Location</span>
                                        </strong>
                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                            <o:p></o:p>
                                        </span>
                                    </p>
                                </td>
                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                    <p class=MsoNormal>
                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[4].'<o:p></o:p></span>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                    <p class=MsoNormal>
                                        <strong>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Area</span>
                                        </strong>
                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                            <o:p></o:p>
                                        </span>
                                    </p>
                                </td>
                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                    <p class=MsoNormal>
                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[5].'<o:p></o:p></span>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                    <p class=MsoNormal>
                                        <strong>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Dahill TAG</span>
                                        </strong>
                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                            <o:p></o:p>
                                        </span>
                                    </p>
                                </td>
                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                    <p class=MsoNormal>
                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[6].'<o:p></o:p></span>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                    <p class=MsoNormal>
                                        <strong>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Network Name</span>
                                        </strong>
                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                            <o:p></o:p>
                                        </span>
                                    </p>
                                </td>
                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                    <p class=MsoNormal>
                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[7].'<o:p></o:p></span>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                    <p class=MsoNormal>
                                        <strong>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">IP Address</span>
                                        </strong>
                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                            <o:p></o:p>
                                        </span>
                                    </p>
                                </td>
                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                    <p class=MsoNormal>
                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.rtrim($data[8], "'").'<o:p></o:p></span>
                                    </p>
                                </td>
                            </tr>
                            ';
                            break;
                        case 'IPS':
                            $message .= '
                                                            <tr>
                                    <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                        <p class=MsoNormal>
                                            <strong>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">IP</span>
                                            </strong>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                <o:p></o:p>
                                            </span>
                                        </p>
                                    </td>
                                    <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                        <p class=MsoNormal>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[1].'<o:p></o:p></span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                        <p class=MsoNormal>
                                            <strong>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Device</span>
                                            </strong>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                <o:p></o:p>
                                            </span>
                                        </p>
                                    </td>
                                    <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                        <p class=MsoNormal>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[2].'<o:p></o:p></span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                        <p class=MsoNormal>
                                            <strong>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Location</span>
                                            </strong>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                <o:p></o:p>
                                            </span>
                                        </p>
                                    </td>
                                    <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                        <p class=MsoNormal>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[3].'<o:p></o:p></span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                        <p class=MsoNormal>
                                            <strong>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Area</span>
                                            </strong>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                <o:p></o:p>
                                            </span>
                                        </p>
                                    </td>
                                    <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                        <p class=MsoNormal>
                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.rtrim($data[4], "'").'<o:p></o:p></span>
                                        </p>
                                    </td>
                                </tr>
                            ';
                            break;

                        default:
                            break;
                    }
                    $message .= '</table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="border:none;padding:15.0pt 0in 0in 15.0pt;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%">
                                                <p class=MsoNormal align=center style="text-align:center;line-height:150%">
                                                    <span style="font-size:10.5pt;line-height:150%;font-family:ge-sans;color:#999C9F">This notification has been sent automatically from IT Support Page, please do not reply to this email.<o:p></o:p></span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="border:none;border-bottom:solid #BFC2C5 1.0pt;padding:0in 0in 0in 15.0pt;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%">
                                                <p class=MsoNormal align=center style="text-align:center;line-height:150%">
                                                    <span style="font-size:10.5pt;line-height:150%;font-family:ge-sans;color:#999C9F">© Copyright 2020 General Electric Company<o:p></o:p></span>
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </td>
                        </tr>
                        </table>
                        </div>
                        </td>
                        </tr>
                        </table>
                        </div>
                        <p class=MsoNormal><o:p>&nbsp;</o:p></p>
                        </body>
                        </html>
                        ';
                   
                    break;
                case 'modified':
                    $subject = $loguser . " modified an item from ". $mail_section;
                    //Detectar si hubo cambios en el registro:
                    $message = '
                        <html xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:w="urn:schemas-microsoft-com:office:word" xmlns:m="http://schemas.microsoft.com/office/2004/12/omml" xmlns="http://www.w3.org/TR/REC-html40">
                        <head><meta http-equiv=Content-Type content="text/html; charset=utf-8"><meta name=Generator content="Microsoft Word 15 (filtered medium)"><!--[if !mso]><style>v\:* {behavior:url(#default#VML);}
                        o\:* {behavior:url(#default#VML);}
                        w\:* {behavior:url(#default#VML);}
                        .shape {behavior:url(#default#VML);}
                        </style><![endif]--><style><!--
                        /* Font Definitions */
                        @font-face
                            {font-family:"Cambria Math";
                            panose-1:2 4 5 3 5 4 6 3 2 4;}
                        @font-face
                            {font-family:Calibri;
                            panose-1:2 15 5 2 2 2 4 3 2 4;}
                        @font-face
                            {font-family:ge-inspira;}
                        @font-face
                            {font-family:ge-sans;}
                        /* Style Definitions */
                        p.MsoNormal, li.MsoNormal, div.MsoNormal
                            {margin:0in;
                            margin-bottom:.0001pt;
                            font-size:11.0pt;
                            font-family:"Calibri",sans-serif;}
                        h1
                            {mso-style-priority:9;
                            mso-style-link:"Heading 1 Char";
                            mso-margin-top-alt:auto;
                            margin-right:0in;
                            mso-margin-bottom-alt:auto;
                            margin-left:0in;
                            font-size:24.0pt;
                            font-family:"Calibri",sans-serif;}
                        a:link, span.MsoHyperlink
                            {mso-style-priority:99;
                            color:#0563C1;
                            text-decoration:underline;}
                        a:visited, span.MsoHyperlinkFollowed
                            {mso-style-priority:99;
                            color:#954F72;
                            text-decoration:underline;}
                        p.msonormal0, li.msonormal0, div.msonormal0
                            {mso-style-name:msonormal;
                            mso-margin-top-alt:auto;
                            margin-right:0in;
                            mso-margin-bottom-alt:auto;
                            margin-left:0in;
                            font-size:11.0pt;
                            font-family:"Calibri",sans-serif;}
                        span.Heading1Char
                            {mso-style-name:"Heading 1 Char";
                            mso-style-priority:9;
                            mso-style-link:"Heading 1";
                            font-family:"Calibri Light",sans-serif;
                            color:#2F5496;}
                        span.subhead
                            {mso-style-name:subhead;}
                        span.EmailStyle21
                            {mso-style-type:personal-reply;
                            font-family:"Calibri",sans-serif;
                            color:windowtext;}
                        .MsoChpDefault
                            {mso-style-type:export-only;
                            font-size:10.0pt;}
                        @page WordSection1
                            {size:8.5in 11.0in;
                            margin:1.0in 1.0in 1.0in 1.0in;}
                        div.WordSection1
                            {page:WordSection1;}
                        --></style><!--[if gte mso 9]><xml>
                        <o:shapedefaults v:ext="edit" spidmax="1026" />
                        </xml><![endif]--><!--[if gte mso 9]><xml>
                        <o:shapelayout v:ext="edit">
                        <o:idmap v:ext="edit" data="1" />
                        </o:shapelayout></xml><![endif]-->
                        </head>
                        <body bgcolor="#F2F2F2" lang=ES-MX link="#0563C1" vlink="#954F72">
                            <p class=MsoNormal><o:p>&nbsp;</o:p></p>
                            <div align=center>
                                <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width="100%" style="width:100.0%;background:#F0F1F2;border-collapse:collapse">
                                    <tr>
                                        <td width="100%" style="width:100.0%;padding:15.0pt 15.0pt 15.0pt 15.0pt">
                                            <div align=center>
                                                <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=800 style="width:600.0pt;border-collapse:collapse">
                                                    <tr>
                                                        <td style="padding:0in 0in 0in 0in">
                                                            <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width="100%" style="width:100.0%;background:#45ADA8;border-collapse:collapse">
                                                                <tr>
                                                                    <td valign=top style="padding:24.0pt 30.0pt 0in 30.0pt">
                                                                        <h1 style="mso-margin-top-alt:0in;margin-right:0in;margin-bottom:7.5pt;margin-left:0in">
                                                                            <span style="font-size:30.0pt;font-family:ge-inspira;color:white;font-weight:normal">IT SUPPORT PAGE<br><br></span>
                                                                            <span class=subhead>
                                                                                <span style="font-size:15.0pt;font-family:ge-inspira;color:white;font-weight:normal">Inventory</span>
                                                                            </span>
                                                                            <span style="font-size:30.0pt;font-family:ge-inspira;color:white;font-weight:normal"><o:p></o:p></span>
                                                                        </h1>
                                                                    </td>
                                                                    <td width=96 valign=center style="width:1.0in;padding:13.5pt 30.0pt 0in 16.5pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100">
                                                                        <p class=MsoNormal>
                                                                            <b>
                                                                                <span style="font-size:15.0pt;font-family:ge-inspira;color:white">
                                                                                    <img width=90 height=90 style="width:1.0in;height:1.4687in" id=headerLogo src="http://mxcjsbak01/IT_Support/img/gelogocolor.png"><o:p></o:p>
                                                                                </span>
                                                                            </b>
                                                                        </p>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding:0in 0in 0in 0in;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                                                            <div align=center>
                                                                <table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width="100%" style="width:100.0%;background:white;border-collapse:collapse;border:none;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%" id=templateBody>
                                                                    <tr>
                                                                        <td style="border:none;padding:0in 0in 0in 0in;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                                                                            <h1 style="mso-margin-top-alt:0in;margin-right:0in;margin-bottom:3pt;margin-left:1in">
                                                                                <span class=subhead>
                                                                                    <span style="font-size:15.0pt;font-family:ge-inspira;color:Black;font-weight:normal"><strong>'.$subject.'</strong></span>
                                                                                </span>
                                                                                <span style="font-size:30.0pt;font-family:ge-inspira;color:white;font-weight:normal"><o:p></o:p></span>
                                                                            </h1>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="border:none;padding:27.75pt 30.0pt 15.75pt 30.0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                                                                            <table class=MsoNormalTable border=0 cellpadding=0 width="100%" style="width:100.0%">
                                                                                <tr>
                                                                                    <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                                                        <p class=MsoNormal>
                                                                                            <strong>
                                                                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Date & Time</span>
                                                                                            </strong>
                                                                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                                                            <o:p></o:p>
                                                                                            </span>
                                                                                        </p>
                                                                                    </td>
                                                                                    <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                                                        <p class=MsoNormal>
                                                                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$date.' / '.$time.'<o:p></o:p>
                                                                                            </span>
                                                                                        </p>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                                                        <p class=MsoNormal>
                                                                                            <strong>
                                                                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black"></span>
                                                                                            </strong>
                                                                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                                                            <o:p></o:p>
                                                                                            </span>
                                                                                        </p>
                                                                                    </td>
                                                                                    <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                                                        <p class=MsoNormal>
                                                                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black"><strong>Previous</strong><o:p></o:p>
                                                                                            </span>
                                                                                        </p>
                                                                                    </td>
                                                                                    <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                                                        <p class=MsoNormal>
                                                                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black"><strong>Updated</strong><o:p></o:p>
                                                                                            </span>
                                                                                        </p>
                                                                                    </td>
                                                                                </tr>
                    ';
                    $color = "#F0F1F2";
                    $changedcolor = "#EDE574";
                    switch ($mail_section) {
                        case 'Desktops':
                            if($data[0] == $data[10] && 
                                $data[1] == $data[11] && 
                                $data[2] == $data[12] && 
                                $data[3] == $data[13] && 
                                $data[4] == $data[14] && 
                                $data[5] == $data[15] && 
                                $data[6] == $data[16] && 
                                $data[7] == $data[17] && 
                                $data[8] == $data[18] &&
                                $data[9] == $data[19] ) {
                                    die();
                                }else{
                                    //Brand Row
                                    $message .= '
                                        <tr>
                                            <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                <p class=MsoNormal>
                                                    <strong>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Brand</span>
                                                    </strong>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                        <o:p></o:p>
                                                    </span>
                                                </p>
                                            </td>
                                    ';
                                    if($data[0] == $data[10]){
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[0].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[10].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }else{
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[0].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:'.$changedcolor.';padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[10].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }
                                    //Model Row
                                    $message .='
                                            <tr>
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <strong>
                                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Model</span>
                                                        </strong>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                            <o:p></o:p>
                                                        </span>
                                                    </p>
                                                </td>
                                    ';
                                    if($data[1] == $data[11]){
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[1].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[11].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }else{
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[1].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:'.$changedcolor.';padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[11].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }
                                    //Service Tag Row
                                    $message .='
                                            <tr>
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <strong>
                                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Service Tag</span>
                                                        </strong>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                            <o:p></o:p>
                                                        </span>
                                                    </p>
                                                </td>
                                    ';
                                    if($data[2] == $data[12]){
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[2].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[12].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }else{
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[2].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:'.$changedcolor.';padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[12].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }
                                    //Location row
                                    $message .='
                                            <tr>
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <strong>
                                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Location</span>
                                                        </strong>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                            <o:p></o:p>
                                                        </span>
                                                    </p>
                                                </td>
                                    ';
                                    if($data[3] == $data[13]){
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[3].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[13].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }else{
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[3].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:'.$changedcolor.';padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[13].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }
                                    //Area Row
                                    $message .='
                                            <tr>
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <strong>
                                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Area</span>
                                                        </strong>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                            <o:p></o:p>
                                                        </span>
                                                    </p>
                                                </td>
                                    ';
                                    if($data[4] == $data[14]){
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[4].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[14].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }else{
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[4].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:'.$changedcolor.';padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[14].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }
                                    //os Row
                                    $message .='
                                            <tr>
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <strong>
                                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">OS</span>
                                                        </strong>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                            <o:p></o:p>
                                                        </span>
                                                    </p>
                                                </td>
                                    ';
                                    if($data[5] == $data[15]){
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[5].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[15].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }else{
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[5].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:'.$changedcolor.';padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[15].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }
                                    //Specs row
                                    $message .='
                                            <tr>
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <strong>
                                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Specs</span>
                                                        </strong>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                            <o:p></o:p>
                                                        </span>
                                                    </p>
                                                </td>
                                    ';
                                    if($data[6] == $data[16]){
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[6].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[16].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }else{
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[6].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:'.$changedcolor.';padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[16].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }
                                    //Hostname Row
                                    $message .='
                                            <tr>
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <strong>
                                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Hostname</span>
                                                        </strong>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                            <o:p></o:p>
                                                        </span>
                                                    </p>
                                                </td>
                                    ';
                                    if($data[7] == $data[17]){
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[7].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[17].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }else{
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[7].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:'.$changedcolor.';padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[17].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }
                                    //Country row
                                    $message .='
                                            <tr>
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <strong>
                                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Country</span>
                                                        </strong>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                            <o:p></o:p>
                                                        </span>
                                                    </p>
                                                </td>
                                    ';
                                    if($data[8] == $data[18]){
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[8].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[18].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }else{
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[8].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:'.$changedcolor.';padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[18].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }
                                    //Username Row
                                    $message .='
                                            <tr>
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <strong>
                                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">User Name</span>
                                                        </strong>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                            <o:p></o:p>
                                                        </span>
                                                    </p>
                                                </td>
                                    ';
                                    if($data[9] == $data[19]){
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[9].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[19].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }else{
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[9].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:'.$changedcolor.';padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[19].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }
                                }
                            break;
                        case 'Laptops':
                            if($data[0] == $data[10] && 
                                $data[1] == $data[11] && 
                                $data[2] == $data[12] && 
                                $data[3] == $data[13] && 
                                $data[4] == $data[14] && 
                                $data[5] == $data[15] && 
                                $data[6] == $data[16] && 
                                $data[7] == $data[17] && 
                                $data[8] == $data[18] &&
                                $data[9] == $data[19] ) {
                                    die();
                                }else{
                                    //Brand Row
                                    $message .= '
                                        <tr>
                                            <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                <p class=MsoNormal>
                                                    <strong>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Brand</span>
                                                    </strong>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                        <o:p></o:p>
                                                    </span>
                                                </p>
                                            </td>
                                    ';
                                    if($data[0] == $data[10]){
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[0].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[10].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }else{
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[0].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:'.$changedcolor.';padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[10].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }
                                    //Model Row
                                    $message .='
                                            <tr>
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <strong>
                                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Model</span>
                                                        </strong>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                            <o:p></o:p>
                                                        </span>
                                                    </p>
                                                </td>
                                    ';
                                    if($data[1] == $data[11]){
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[1].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[11].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }else{
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[1].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:'.$changedcolor.';padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[11].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }
                                    //Service Tag Row
                                    $message .='
                                            <tr>
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <strong>
                                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Service Tag</span>
                                                        </strong>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                            <o:p></o:p>
                                                        </span>
                                                    </p>
                                                </td>
                                    ';
                                    if($data[2] == $data[12]){
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[2].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[12].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }else{
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[2].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:'.$changedcolor.';padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[12].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }
                                    //SSO row
                                    $message .='
                                            <tr>
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <strong>
                                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">SSO</span>
                                                        </strong>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                            <o:p></o:p>
                                                        </span>
                                                    </p>
                                                </td>
                                    ';
                                    if($data[3] == $data[13]){
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[3].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[13].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }else{
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[3].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:'.$changedcolor.';padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[13].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }
                                    //User Name Row
                                    $message .='
                                            <tr>
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <strong>
                                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">User Name</span>
                                                        </strong>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                            <o:p></o:p>
                                                        </span>
                                                    </p>
                                                </td>
                                    ';
                                    if($data[4] == $data[14]){
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[4].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[14].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }else{
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[4].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:'.$changedcolor.';padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[14].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }
                                    //Department Row
                                    $message .='
                                            <tr>
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <strong>
                                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Department</span>
                                                        </strong>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                            <o:p></o:p>
                                                        </span>
                                                    </p>
                                                </td>
                                    ';
                                    if($data[5] == $data[15]){
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[5].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[15].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }else{
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[5].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:'.$changedcolor.';padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[15].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }
                                    //OS row
                                    $message .='
                                            <tr>
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <strong>
                                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">OS</span>
                                                        </strong>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                            <o:p></o:p>
                                                        </span>
                                                    </p>
                                                </td>
                                    ';
                                    if($data[6] == $data[16]){
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[6].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[16].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }else{
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[6].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:'.$changedcolor.';padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[16].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }
                                    //Specs Row
                                    $message .='
                                            <tr>
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <strong>
                                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Specs</span>
                                                        </strong>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                            <o:p></o:p>
                                                        </span>
                                                    </p>
                                                </td>
                                    ';
                                    if($data[7] == $data[17]){
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[7].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[17].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }else{
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[7].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:'.$changedcolor.';padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[17].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }
                                    //Hostname row
                                    $message .='
                                            <tr>
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <strong>
                                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Hostname</span>
                                                        </strong>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                            <o:p></o:p>
                                                        </span>
                                                    </p>
                                                </td>
                                    ';
                                    if($data[8] == $data[18]){
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[8].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[18].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }else{
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[8].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:'.$changedcolor.';padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[18].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }
                                    //Country Row
                                    $message .='
                                            <tr>
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <strong>
                                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Country</span>
                                                        </strong>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                            <o:p></o:p>
                                                        </span>
                                                    </p>
                                                </td>
                                    ';
                                    if($data[9] == $data[19]){
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[9].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[19].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }else{
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[9].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:'.$changedcolor.';padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[19].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }
                                }
                            break;
                        case 'Mobiles':
                            if($data[0] == $data[9] && 
                                $data[1] == $data[10] && 
                                $data[2] == $data[11] && 
                                $data[3] == $data[12] && 
                                $data[4] == $data[13] && 
                                $data[5] == $data[14] && 
                                $data[6] == $data[15] && 
                                $data[7] == $data[16] && 
                                $data[8] == $data[17] ) {
                                    die();
                                }else{
                                    //Brand Row
                                    $message .= '
                                        <tr>
                                            <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                <p class=MsoNormal>
                                                    <strong>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Brand</span>
                                                    </strong>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                        <o:p></o:p>
                                                    </span>
                                                </p>
                                            </td>
                                    ';
                                    if($data[0] == $data[9]){
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[0].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[9].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }else{
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[0].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:'.$changedcolor.';padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[9].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }
                                    //Model Row
                                    $message .='
                                            <tr>
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <strong>
                                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Model</span>
                                                        </strong>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                            <o:p></o:p>
                                                        </span>
                                                    </p>
                                                </td>
                                    ';
                                    if($data[1] == $data[10]){
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[1].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[10].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }else{
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[1].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:'.$changedcolor.';padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[10].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }
                                    //IMEI Row
                                    $message .='
                                            <tr>
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <strong>
                                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">IMEI</span>
                                                        </strong>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                            <o:p></o:p>
                                                        </span>
                                                    </p>
                                                </td>
                                    ';
                                    if($data[2] == $data[11]){
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[2].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[11].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }else{
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[2].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:'.$changedcolor.';padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[11].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }
                                    //SSO row
                                    $message .='
                                            <tr>
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <strong>
                                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">SSO</span>
                                                        </strong>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                            <o:p></o:p>
                                                        </span>
                                                    </p>
                                                </td>
                                    ';
                                    if($data[3] == $data[12]){
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[3].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[12].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }else{
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[3].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:'.$changedcolor.';padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[12].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }
                                    //User Name Row
                                    $message .='
                                            <tr>
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <strong>
                                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">User Name</span>
                                                        </strong>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                            <o:p></o:p>
                                                        </span>
                                                    </p>
                                                </td>
                                    ';
                                    if($data[4] == $data[13]){
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[4].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[13].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }else{
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[4].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:'.$changedcolor.';padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[13].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }
                                    //Department Row
                                    $message .='
                                            <tr>
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <strong>
                                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Department</span>
                                                        </strong>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                            <o:p></o:p>
                                                        </span>
                                                    </p>
                                                </td>
                                    ';
                                    if($data[5] == $data[14]){
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[5].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[14].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }else{
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[5].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:'.$changedcolor.';padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[14].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }
                                    //Color row
                                    $message .='
                                            <tr>
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <strong>
                                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Color</span>
                                                        </strong>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                            <o:p></o:p>
                                                        </span>
                                                    </p>
                                                </td>
                                    ';
                                    if($data[6] == $data[15]){
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[6].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[15].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }else{
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[6].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:'.$changedcolor.';padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[15].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }
                                    //Specs Row
                                    $message .='
                                            <tr>
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <strong>
                                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Specs</span>
                                                        </strong>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                            <o:p></o:p>
                                                        </span>
                                                    </p>
                                                </td>
                                    ';
                                    if($data[7] == $data[16]){
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[7].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[16].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }else{
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[7].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:'.$changedcolor.';padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[16].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }
                                    //Tel Number row
                                    $message .='
                                            <tr>
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <strong>
                                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Tel Number</span>
                                                        </strong>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                            <o:p></o:p>
                                                        </span>
                                                    </p>
                                                </td>
                                    ';
                                    if($data[8] == $data[17]){
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[8].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[17].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }else{
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[8].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:'.$changedcolor.';padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[17].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }
                                }
                            break;
                        case 'Label Printers':
                            if($data[0] == $data[8] && 
                                $data[1] == $data[9] && 
                                $data[2] == $data[10] && 
                                $data[3] == $data[11] && 
                                $data[4] == $data[12] && 
                                $data[5] == $data[13] && 
                                $data[6] == $data[14] && 
                                $data[7] == $data[15] ) {
                                    die();
                                }else{
                                    //Brand Row
                                    $message .= '
                                        <tr>
                                            <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                <p class=MsoNormal>
                                                    <strong>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Brand</span>
                                                    </strong>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                        <o:p></o:p>
                                                    </span>
                                                </p>
                                            </td>
                                    ';
                                    if($data[0] == $data[8]){
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[0].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[8].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }else{
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[0].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:'.$changedcolor.';padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[8].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }
                                    //Model Row
                                    $message .='
                                            <tr>
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <strong>
                                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Model</span>
                                                        </strong>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                            <o:p></o:p>
                                                        </span>
                                                    </p>
                                                </td>
                                    ';
                                    if($data[1] == $data[9]){
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[1].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[9].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }else{
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[1].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:'.$changedcolor.';padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[9].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }
                                    //Serial Number Row
                                    $message .='
                                            <tr>
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <strong>
                                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Serial Number</span>
                                                        </strong>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                            <o:p></o:p>
                                                        </span>
                                                    </p>
                                                </td>
                                    ';
                                    if($data[2] == $data[10]){
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[2].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[10].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }else{
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[2].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:'.$changedcolor.';padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[10].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }
                                    //Location row
                                    $message .='
                                            <tr>
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <strong>
                                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Location</span>
                                                        </strong>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                            <o:p></o:p>
                                                        </span>
                                                    </p>
                                                </td>
                                    ';
                                    if($data[3] == $data[11]){
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[3].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[11].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }else{
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[3].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:'.$changedcolor.';padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[11].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }
                                    //Area Row
                                    $message .='
                                            <tr>
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <strong>
                                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Area</span>
                                                        </strong>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                            <o:p></o:p>
                                                        </span>
                                                    </p>
                                                </td>
                                    ';
                                    if($data[4] == $data[12]){
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[4].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[12].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }else{
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[4].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:'.$changedcolor.';padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[12].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }
                                    //TAG Row
                                    $message .='
                                            <tr>
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <strong>
                                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">TAG</span>
                                                        </strong>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                            <o:p></o:p>
                                                        </span>
                                                    </p>
                                                </td>
                                    ';
                                    if($data[5] == $data[13]){
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[5].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[13].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }else{
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[5].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:'.$changedcolor.';padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[13].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }
                                    //Bartender Name row
                                    $message .='
                                            <tr>
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <strong>
                                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Bartender Name</span>
                                                        </strong>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                            <o:p></o:p>
                                                        </span>
                                                    </p>
                                                </td>
                                    ';
                                    if($data[6] == $data[14]){
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[6].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[14].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }else{
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[6].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:'.$changedcolor.';padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[14].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }
                                    //IP Address Row
                                    $message .='
                                            <tr>
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <strong>
                                                            <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">IP Address</span>
                                                        </strong>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                            <o:p></o:p>
                                                        </span>
                                                    </p>
                                                </td>
                                    ';
                                    if($data[7] == $data[15]){
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[7].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[15].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }else{
                                        $message .= '
                                                <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[7].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                                <td style="background:'.$changedcolor.';padding:.75pt .75pt .75pt 7.5pt">
                                                    <p class=MsoNormal>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[15].'<o:p></o:p></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        ';
                                    }
                                }
                            break;
                        case 'Laser Printers':
                            if($data[0] == $data[8] && 
                            $data[1] == $data[9] && 
                            $data[2] == $data[10] && 
                            $data[3] == $data[11] && 
                            $data[4] == $data[12] && 
                            $data[5] == $data[13] && 
                            $data[6] == $data[14] && 
                            $data[7] == $data[15] ) {
                                die();
                            }else{
                                //Brand Row
                                $message .= '
                                    <tr>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <strong>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Brand</span>
                                                </strong>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                    <o:p></o:p>
                                                </span>
                                            </p>
                                        </td>
                                ';
                                if($data[0] == $data[8]){
                                    $message .= '
                                            <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                <p class=MsoNormal>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[0].'<o:p></o:p></span>
                                                </p>
                                            </td>
                                            <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                <p class=MsoNormal>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[8].'<o:p></o:p></span>
                                                </p>
                                            </td>
                                        </tr>
                                    ';
                                }else{
                                    $message .= '
                                            <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                <p class=MsoNormal>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[0].'<o:p></o:p></span>
                                                </p>
                                            </td>
                                            <td style="background:'.$changedcolor.';padding:.75pt .75pt .75pt 7.5pt">
                                                <p class=MsoNormal>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[8].'<o:p></o:p></span>
                                                </p>
                                            </td>
                                        </tr>
                                    ';
                                }
                                //Model Row
                                $message .='
                                        <tr>
                                            <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                <p class=MsoNormal>
                                                    <strong>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Model</span>
                                                    </strong>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                        <o:p></o:p>
                                                    </span>
                                                </p>
                                            </td>
                                ';
                                if($data[1] == $data[9]){
                                    $message .= '
                                            <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                <p class=MsoNormal>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[1].'<o:p></o:p></span>
                                                </p>
                                            </td>
                                            <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                <p class=MsoNormal>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[9].'<o:p></o:p></span>
                                                </p>
                                            </td>
                                        </tr>
                                    ';
                                }else{
                                    $message .= '
                                            <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                <p class=MsoNormal>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[1].'<o:p></o:p></span>
                                                </p>
                                            </td>
                                            <td style="background:'.$changedcolor.';padding:.75pt .75pt .75pt 7.5pt">
                                                <p class=MsoNormal>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[9].'<o:p></o:p></span>
                                                </p>
                                            </td>
                                        </tr>
                                    ';
                                }
                                //Serial Number Row
                                $message .='
                                        <tr>
                                            <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                <p class=MsoNormal>
                                                    <strong>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Serial Number</span>
                                                    </strong>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                        <o:p></o:p>
                                                    </span>
                                                </p>
                                            </td>
                                ';
                                if($data[2] == $data[10]){
                                    $message .= '
                                            <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                <p class=MsoNormal>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[2].'<o:p></o:p></span>
                                                </p>
                                            </td>
                                            <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                <p class=MsoNormal>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[10].'<o:p></o:p></span>
                                                </p>
                                            </td>
                                        </tr>
                                    ';
                                }else{
                                    $message .= '
                                            <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                <p class=MsoNormal>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[2].'<o:p></o:p></span>
                                                </p>
                                            </td>
                                            <td style="background:'.$changedcolor.';padding:.75pt .75pt .75pt 7.5pt">
                                                <p class=MsoNormal>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[10].'<o:p></o:p></span>
                                                </p>
                                            </td>
                                        </tr>
                                    ';
                                }
                                //Location row
                                $message .='
                                        <tr>
                                            <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                <p class=MsoNormal>
                                                    <strong>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Location</span>
                                                    </strong>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                        <o:p></o:p>
                                                    </span>
                                                </p>
                                            </td>
                                ';
                                if($data[3] == $data[11]){
                                    $message .= '
                                            <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                <p class=MsoNormal>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[3].'<o:p></o:p></span>
                                                </p>
                                            </td>
                                            <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                <p class=MsoNormal>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[11].'<o:p></o:p></span>
                                                </p>
                                            </td>
                                        </tr>
                                    ';
                                }else{
                                    $message .= '
                                            <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                <p class=MsoNormal>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[3].'<o:p></o:p></span>
                                                </p>
                                            </td>
                                            <td style="background:'.$changedcolor.';padding:.75pt .75pt .75pt 7.5pt">
                                                <p class=MsoNormal>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[11].'<o:p></o:p></span>
                                                </p>
                                            </td>
                                        </tr>
                                    ';
                                }
                                //Area Row
                                $message .='
                                        <tr>
                                            <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                <p class=MsoNormal>
                                                    <strong>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Area</span>
                                                    </strong>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                        <o:p></o:p>
                                                    </span>
                                                </p>
                                            </td>
                                ';
                                if($data[4] == $data[12]){
                                    $message .= '
                                            <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                <p class=MsoNormal>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[4].'<o:p></o:p></span>
                                                </p>
                                            </td>
                                            <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                <p class=MsoNormal>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[12].'<o:p></o:p></span>
                                                </p>
                                            </td>
                                        </tr>
                                    ';
                                }else{
                                    $message .= '
                                            <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                <p class=MsoNormal>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[4].'<o:p></o:p></span>
                                                </p>
                                            </td>
                                            <td style="background:'.$changedcolor.';padding:.75pt .75pt .75pt 7.5pt">
                                                <p class=MsoNormal>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[12].'<o:p></o:p></span>
                                                </p>
                                            </td>
                                        </tr>
                                    ';
                                }
                                //Dahill TAG Row
                                $message .='
                                        <tr>
                                            <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                <p class=MsoNormal>
                                                    <strong>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Dahill TAG</span>
                                                    </strong>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                        <o:p></o:p>
                                                    </span>
                                                </p>
                                            </td>
                                ';
                                if($data[5] == $data[13]){
                                    $message .= '
                                            <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                <p class=MsoNormal>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[5].'<o:p></o:p></span>
                                                </p>
                                            </td>
                                            <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                <p class=MsoNormal>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[13].'<o:p></o:p></span>
                                                </p>
                                            </td>
                                        </tr>
                                    ';
                                }else{
                                    $message .= '
                                            <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                <p class=MsoNormal>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[5].'<o:p></o:p></span>
                                                </p>
                                            </td>
                                            <td style="background:'.$changedcolor.';padding:.75pt .75pt .75pt 7.5pt">
                                                <p class=MsoNormal>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[13].'<o:p></o:p></span>
                                                </p>
                                            </td>
                                        </tr>
                                    ';
                                }
                                //Network Name row
                                $message .='
                                        <tr>
                                            <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                <p class=MsoNormal>
                                                    <strong>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Network Name</span>
                                                    </strong>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                        <o:p></o:p>
                                                    </span>
                                                </p>
                                            </td>
                                ';
                                if($data[6] == $data[14]){
                                    $message .= '
                                            <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                <p class=MsoNormal>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[6].'<o:p></o:p></span>
                                                </p>
                                            </td>
                                            <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                <p class=MsoNormal>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[14].'<o:p></o:p></span>
                                                </p>
                                            </td>
                                        </tr>
                                    ';
                                }else{
                                    $message .= '
                                            <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                <p class=MsoNormal>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[6].'<o:p></o:p></span>
                                                </p>
                                            </td>
                                            <td style="background:'.$changedcolor.';padding:.75pt .75pt .75pt 7.5pt">
                                                <p class=MsoNormal>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[14].'<o:p></o:p></span>
                                                </p>
                                            </td>
                                        </tr>
                                    ';
                                }
                                //IP Address Row
                                $message .='
                                        <tr>
                                            <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                <p class=MsoNormal>
                                                    <strong>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">IP Address</span>
                                                    </strong>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                        <o:p></o:p>
                                                    </span>
                                                </p>
                                            </td>
                                ';
                                if($data[7] == $data[15]){
                                    $message .= '
                                            <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                <p class=MsoNormal>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[7].'<o:p></o:p></span>
                                                </p>
                                            </td>
                                            <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                <p class=MsoNormal>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[15].'<o:p></o:p></span>
                                                </p>
                                            </td>
                                        </tr>
                                    ';
                                }else{
                                    $message .= '
                                            <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                <p class=MsoNormal>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[7].'<o:p></o:p></span>
                                                </p>
                                            </td>
                                            <td style="background:'.$changedcolor.';padding:.75pt .75pt .75pt 7.5pt">
                                                <p class=MsoNormal>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[15].'<o:p></o:p></span>
                                                </p>
                                            </td>
                                        </tr>
                                    ';
                                }
                            }
                            break;
                        case 'IPS':
                            if($data[0] == $data[4] && 
                            $data[1] == $data[5] && 
                            $data[2] == $data[6] && 
                            $data[3] == $data[7] ) {
                                die();
                            }else{
                                //IP Row
                                $message .= '
                                    <tr>
                                        <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                            <p class=MsoNormal>
                                                <strong>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">IP</span>
                                                </strong>
                                                <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                    <o:p></o:p>
                                                </span>
                                            </p>
                                        </td>
                                ';
                                if($data[0] == $data[4]){
                                    $message .= '
                                            <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                <p class=MsoNormal>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[0].'<o:p></o:p></span>
                                                </p>
                                            </td>
                                            <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                <p class=MsoNormal>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[4].'<o:p></o:p></span>
                                                </p>
                                            </td>
                                        </tr>
                                    ';
                                }else{
                                    $message .= '
                                            <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                <p class=MsoNormal>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[0].'<o:p></o:p></span>
                                                </p>
                                            </td>
                                            <td style="background:'.$changedcolor.';padding:.75pt .75pt .75pt 7.5pt">
                                                <p class=MsoNormal>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[4].'<o:p></o:p></span>
                                                </p>
                                            </td>
                                        </tr>
                                    ';
                                }
                                //Device Row
                                $message .='
                                        <tr>
                                            <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                <p class=MsoNormal>
                                                    <strong>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Device</span>
                                                    </strong>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                        <o:p></o:p>
                                                    </span>
                                                </p>
                                            </td>
                                ';
                                if($data[1] == $data[5]){
                                    $message .= '
                                            <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                <p class=MsoNormal>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[1].'<o:p></o:p></span>
                                                </p>
                                            </td>
                                            <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                <p class=MsoNormal>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[5].'<o:p></o:p></span>
                                                </p>
                                            </td>
                                        </tr>
                                    ';
                                }else{
                                    $message .= '
                                            <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                <p class=MsoNormal>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[1].'<o:p></o:p></span>
                                                </p>
                                            </td>
                                            <td style="background:'.$changedcolor.';padding:.75pt .75pt .75pt 7.5pt">
                                                <p class=MsoNormal>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[5].'<o:p></o:p></span>
                                                </p>
                                            </td>
                                        </tr>
                                    ';
                                }
                                //Location Row
                                $message .='
                                        <tr>
                                            <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                <p class=MsoNormal>
                                                    <strong>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Location</span>
                                                    </strong>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                        <o:p></o:p>
                                                    </span>
                                                </p>
                                            </td>
                                ';
                                if($data[2] == $data[6]){
                                    $message .= '
                                            <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                <p class=MsoNormal>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[2].'<o:p></o:p></span>
                                                </p>
                                            </td>
                                            <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                <p class=MsoNormal>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[6].'<o:p></o:p></span>
                                                </p>
                                            </td>
                                        </tr>
                                    ';
                                }else{
                                    $message .= '
                                            <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                <p class=MsoNormal>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[2].'<o:p></o:p></span>
                                                </p>
                                            </td>
                                            <td style="background:'.$changedcolor.';padding:.75pt .75pt .75pt 7.5pt">
                                                <p class=MsoNormal>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[6].'<o:p></o:p></span>
                                                </p>
                                            </td>
                                        </tr>
                                    ';
                                }
                                //Area row
                                $message .='
                                        <tr>
                                            <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                <p class=MsoNormal>
                                                    <strong>
                                                        <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">Area</span>
                                                    </strong>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">
                                                        <o:p></o:p>
                                                    </span>
                                                </p>
                                            </td>
                                ';
                                if($data[3] == $data[7]){
                                    $message .= '
                                            <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                <p class=MsoNormal>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[3].'<o:p></o:p></span>
                                                </p>
                                            </td>
                                            <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                <p class=MsoNormal>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[7].'<o:p></o:p></span>
                                                </p>
                                            </td>
                                        </tr>
                                    ';
                                }else{
                                    $message .= '
                                            <td style="background:#F0F1F2;padding:.75pt .75pt .75pt 7.5pt">
                                                <p class=MsoNormal>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[3].'<o:p></o:p></span>
                                                </p>
                                            </td>
                                            <td style="background:'.$changedcolor.';padding:.75pt .75pt .75pt 7.5pt">
                                                <p class=MsoNormal>
                                                    <span style="font-size:10.5pt;font-family:"Arial",sans-serif;color:black">'.$data[7].'<o:p></o:p></span>
                                                </p>
                                            </td>
                                        </tr>
                                    ';
                                }
                            }
                            break;
                        default:
                            break;
                    }
                    $message .= '</table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="border:none;padding:15.0pt 0in 0in 15.0pt;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%">
                                                <p class=MsoNormal align=center style="text-align:center;line-height:150%">
                                                    <span style="font-size:10.5pt;line-height:150%;font-family:ge-sans;color:#999C9F">This notification has been sent automatically from IT Support Page, please do not reply to this email.<o:p></o:p></span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="border:none;border-bottom:solid #BFC2C5 1.0pt;padding:0in 0in 0in 15.0pt;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%">
                                                <p class=MsoNormal align=center style="text-align:center;line-height:150%">
                                                    <span style="font-size:10.5pt;line-height:150%;font-family:ge-sans;color:#999C9F">© Copyright 2020 General Electric Company<o:p></o:p></span>
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </td>
                        </tr>
                        </table>
                        </div>
                        </td>
                        </tr>
                        </table>
                        </div>
                        <p class=MsoNormal><o:p>&nbsp;</o:p></p>
                        </body>
                        </html>
                        ';
                    
                    break;
                default;
                    break;
            }
            break;
        case 'miscellaneous':
            switch($mail_action){
                case 'add':
                    $subject = "Miscellaneous; " . $loguser . " added an item on ". $mail_section;
                    $message = 'Date: '. $date .' Time: '.$time. "\r\n"  .
                                'Brand: ' . $brand  . "\r\n" . 
                                'Model: ' . $model  . "\r\n"  .
                                'Serial Number: ' . $sn . "\r\n" . 
                                'Stock: ' . $stock . "\r\n" .
                                'Minimum Stock: ' . $minsstock . "\r\n" .
                                'Location: ' . $location . "\r\n" . 
                                'Barcode: ' . $barcode . "\r\n" .
                                'Notes: ' . $notes;
                    break;
                case 'delete':
                    $subject = "Miscellaneous; " . $loguser . " deleted an item from ". $mailsection;
                    $message = 'Date: '. $date .' Time: '.$time. "\r\n"  .
                                'Brand: ' . $brand  . "\r\n" . 
                                'Model: ' . $model  . "\r\n"  .
                                'Serial Number: ' . $sn . "\r\n" . 
                                'Stock: ' . $stock . "\r\n" .
                                'Minimum Stock: ' . $minsstock . "\r\n" .
                                'Location: ' . $location . "\r\n" . 
                                'Barcode: ' . $barcode . "\r\n" .
                                'Notes: ' . $notes;
                    break;
                case 'modified':
                    $subject = "Miscellaneous; " . $loguser . " modified an item from ". $mailsection;
                    $message = 'Date: '. $date .' Time: '.$time. "\r\n"  .
                                'Brand: ' . $brand  . "\r\n" . 
                                'Model: ' . $model  . "\r\n"  .
                                'Serial Number: ' . $sn . "\r\n" . 
                                'Stock: ' . $stock . "\r\n" .
                                'Minimum Stock: ' . $minsstock . "\r\n" .
                                'Location: ' . $location . "\r\n" . 
                                'Barcode: ' . $barcode . "\r\n" .
                                'Notes: ' . $notes;
                    break;
            }
            break;
        default:
            break;
    }

    mail($to,$subject,$message, $headers);    
}
?>