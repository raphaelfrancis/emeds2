<body style="background-color: #f6f6f6; margin: 0;padding: 0;box-sizing: border-box;-webkit-font-smoothing: antialiased;-webkit-text-size-adjust: none;width: 100% !important; height: 100%; line-height: 1.6">
<table style=" vertical-align: top; background-color: #f6f6f6; width: 100%;">
    <tr>
        <td></td>
        <td style="max-width: 600px; margin: 0 auto;" width="600">
            <div style="max-width: 600px; margin: 0 auto; padding: 20px;">
                <table  style="background: #fff; border: 1px solid #e9e9e9; border-radius:3px;" width="100%" cellpadding="0" cellspacing="0">
                    <tr>
                        <td style="padding:20px">
                            <table  cellpadding="0" cellspacing="0">
                                <tr>
                                    <td>
                                        <img src="<?php echo base_url(); ?>static/index/email/header.jpg" style=" max-width: 100%; width: 100%; margin-bottom: 20px;"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h3 style="color: #000; margin: 40px 0 0; line-height: 1.2px; font-weight:bold;">Contact form </h3>
                                    </td>
                                </tr>
                                <tr>
                                   <td style="padding:30px 0; text-align:justify; line-height:20px">
                                       
  
  
                                       
<table width="100%" border="0">
  <tr>
    <td width="45%">Name</td>
    <td width="10%">:</td>
    <td width="45%"><?php echo $name; ?></td>
  </tr>
  <tr>
    <td>E-mail</td>
    <td>:</td>
    <td><?php echo $from_mail; ?></td>
  </tr>
  <tr>
    <td>Subject</td>
    <td>:</td>
    <td><?php echo $subject; ?></td>
  </tr>
  <tr>
    <td>Message</td>
    <td>:</td>
    <td><?php echo nl2br($message); ?></td>
  </tr>
</table>

                                       
                                    </td>
                                </tr>
                                
                                
                                
                              </table>
                        </td>
                    </tr>
                </table>
                <div style="width: 100%; clear: both; color: #999; padding: 20px;font-size: 12px;">
                    <table width="100%">
                        <tr>
                            <td class="aligncenter content-block" style=" padding: 0 0 20px; text-align: center;">Follow <a style="color: #1ab394;
    text-decoration: none;" href="https://www.facebook.com/pages/Emeds/385009635020648?fref=ts">&copy; Emeds</a> on Facebook.</td>
                        </tr>
                    </table>
                </div>
                </div>
        </td>
        <td></td>
    </tr>
</table>

</body>
</html>

