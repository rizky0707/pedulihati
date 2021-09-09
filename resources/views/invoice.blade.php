<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Invoice</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>
        .page-break {
            page-break-after: always;
        }
        .bg-grey {
            background: #F3F3F3;
        }
        .text-right {
            text-align: right;
        }

        .w-full {
            width: 100%;
        }

        .small-width {
            width: 15%;
        }
        .invoice {
            background: white;
            border: 1px solid #CCC;
            font-size: 14px;
            padding: 48px;
            margin: 20px 0;
        }
    </style>
</head>
<body class="bg-grey">

  <div class="container container-smaller">
    <div class="row">
      <div class="col-lg-10 col-lg-offset-1" style="margin-top:20px; text-align: right">
        <div class="btn-group mb-4">
          <a href="/invoice-pdf" class="btn btn-success">Save as PDF</a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-10 col-lg-offset-1">
        @foreach ($donasi as $item)

          <div class="invoice">
            <div class="row">
              <div class="col-sm-6">
                <h4>From:</h4>
                <address>
                  <strong>Yayasan Kembangin Sosial.</strong><br>
                  Jl Bongo no 7. <br>
                  Turangga, Lengkong - Bandung<br>
                  P: (+62)878-2247-5022 <br>
                  E: kembangin.sosial@gmail.com
                </address>
              </div>

              <div class="col-sm-6 text-right">
                <img src="https://res.cloudinary.com/dqzxpn5db/image/upload/v1537151698/website/logo.png" alt="logo">
              </div>
            </div>

            <div class="row">
                    
              <div class="col-sm-7">

                <h4>To:</h4>
                <address>
                  <strong>{{$item->nama}}</strong><br>
                  <span>{{rand(101,1001)}}</span><br>
                  <span>andre@andre.com</span>
                </address>

              </div>

              <div class="col-sm-5 text-right">
                <table class="w-full">
                  <tbody>
                    <tr>
                      <th>Invoice Num:</th>
                      <td>56</td>
                    </tr>
                    <tr>
                      <th>Tanggal Transaksi: </th>
                      <td>{{$item->created_at}}</td>
                    </tr>
                  </tbody>
                </table>

                <div style="margin-bottom: 0px">&nbsp;</div>

                <table class="w-full">
                  <tbody>
                    <tr class="well" style="padding: 5px">
                      <th style="padding: 5px"><div> Balance Due (CAD) </div></th>
                      <td style="padding: 5px"><strong> $499 </strong></td>
                    </tr>
                  </tbody>
                </table>


              </div>
            </div>

            <div class="table-responsive">
              <table class="table invoice-table">
                <thead style="background: #F5F5F5;">
                  <tr>
                    <th>Dekripsi</th>
                    <th></th>
                    <th class="text-right">Price</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                        <strong>Service</strong>
                        <p>Description here. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita perferendis doloribus, quaerat molestias est eum, adipisci dolorem nulla rerum voluptatibus.</p>
                    </td>
                    <td></td>
                    <td class="text-right">$600</td>
                  </tr>

                  <tr>
                    <td>
                        <strong>Service</strong>
                        <p>Description here. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita perferendis doloribus, quaerat molestias est eum, adipisci dolorem nulla rerum voluptatibus.</p>
                    </td>
                    <td></td>
                    <td class="text-right">$600</td>
                  </tr>

                  </tbody>
                </table>
              </div><!-- /table-responsive -->

              <table class="table invoice-total">
                <tbody>
                  <tr>
                    <td class="text-right"><strong>Balance Due :</strong></td>
                    <td class="text-right small-width">$600</td>
                  </tr>
                </tbody>
              </table>

              <hr>

              <div class="row">
                <div class="col-lg-8">
                  <div class="invbody-terms">
                    Thank you for your business. <br>
                    <br>
                    <h4>Payment Terms and Methods</h4>
                    <p>
                      Terima Kasih Bapak/Ibu atas donasi anda untuk program Zakat, Jumlah Donasi                    
                    </p>
                  </div>
                </div>
              </div>
            </div>
            @endforeach

        </div>
      </div>
    </div>

  </body>
</html>
