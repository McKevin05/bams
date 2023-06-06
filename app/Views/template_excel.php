<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">
    <meta name="googlebot" content="noindex">
    <title>BAMS</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url()?>/assets/images/favicon.ico">
  </head>
<body>
    <table width="100%" border="0" cellspacing='0' cellpadding='0' border-spacing='0' style="margin-bottom:20px;">
      <tr>
        <td>
          <table width="100%" border="0" cellspacing='0' cellpadding='0' border-spacing='0' style="margin-bottom:20px;">
            <tr>
              <td width="20%" rowspan="6"><img src="<?php echo base_url().'/assets/images/makati_logo.png' ?>" width="135px"></td>
              <td width="60%" align="center"><h4 style="margin:0px;"><b>REPUBLIC OF THE PHILIPPINES</b></h4></td>
              <td width="20%" rowspan="6"><img src="<?php echo base_url().'/assets/images/makati_logo.png' ?>" width="135px"></td>
            </tr>
            <tr>
              <td align="center"><h5 style="margin:0px;"><b>City of Makati</b></h5></td>
            </tr>
            <tr>
              <td align="center"><h5 style="margin:0px;"><b>Barangay Name</b></h5></td>
            </tr>
            <tr>
              <td align="center"><small>Barangay Address, Makati City</small></td>
            </tr>
            <tr>
              <td align="center"><small>Tel Nos.: 893-1234 / 779-1234 / 550-1234</small></td>
            </tr>
            <tr>
              <td align="center"><small>E-mail Address: barangayemail@gmail.com</small></td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td>
          <?php echo view($content) ?>
        </td>
      </tr>
    </table>
	</div>
</body>
</html>
