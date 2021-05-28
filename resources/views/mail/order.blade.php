<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-GB">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style type="text/css">
    a[x-apple-data-detectors] {
        color: inherit !important;
    }
    </style>
</head>

<body style="margin: 0; padding: 0;">
    <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <td style="padding: 20px 0 30px 0; background: linear-gradient(to top, #FFFFFF, #ECE9E6);">
                <table align="center" border="0" cellpadding="0" cellspacing="0" width="600px"
                    style="border-collapse: collapse; border: 1px solid #cccccc;">
                    <tr>
                        <td bgcolor="#ffffff" style="padding: 30px;">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%"
                                style="border-collapse: collapse; color: #153643; font-family: Arial, sans-serif;">
                                <tr>
                                    <td>
                                        <h2>New order</h2>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Name</strong>: {{ $client_name }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Adress</strong>: {{ $client_address }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Total product</strong>: {{ $total_product_value }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Total shiping</strong>: {{ $total_shipping_value }}
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>