@extends('layouts.app') @section('content')
    <style>
        .pri-poli-page {
            padding: 50px 0;
        }

        ul {
            list-style: disc;
            margin: 0;
            padding: revert;
        }

        .table-content-list .list {
            color: #25559f;
        }

        .list-headings::marker {
            font-size: 2rem;
        }

        .sub-headings li::marker {
            font-size: 1.75rem;
        }

        .square li::marker {
            font-size: 12px;
        }

        .pbd_list-privacy {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        /* table css start*/
        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid black;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
            border: 1px solid black;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2
        }

        /* table css end*/

        @media screen and (max-width: 480px) {

            p,
            li,
            a,
            td {
                font-size: 12px
            }

            th {
                font-size: 14px;
                min-width: 300px;
            }

            td {
                min-width: 500px;
            }


            .list-headings::marker {
                font-size: 1rem;
            }

            .sub-headings li::marker {
                font-size: 1rem;
            }

            .square li::marker {
                font-size: 12px;
            }

            .pbd_list-privacy {
                list-style: none;
                margin: 0;
                padding: 0;
            }

            h2 {
                font-size: 18px;
            }

            h3 {
                font-size: 17px;
            }

            h4 {
                font-size: 16px;
            }

            dl,
            ol,
            ul {
                margin-top: 0;
                margin-bottom: 1rem;
                padding-left: 15px;
            }

            .pri-poli-page {
                padding: 5px;
            }

        }
        @media print {
            .no-print {
                display: none;
            }
            @page {
              margin: 0;
            }
            body {
                height: 100%;
                width: 100%;
            }
            div.row > div {
              display: inline-block;  
              border: solid 1px #ccc;
              margin: 0.1cm;
              font-size: 1rem;
            }
            div.row {
              display: block;
              margin: solid 2px black;
              margin: 0.2cm 1cm;
              font-size: 0;
              white-space: nowrap;
            }
            .table {
                transform: translate(8.5in, -100%) rotate(90deg);
                transform-origin: bottom left;
                display: block;
            }
        }
    </style>
    
<div class="no-print">
    <section class="main news-hero-banner-bg">
  <h1 class="pb-0 mb-0">@lang('words.Privacy Policy')</h1>
  <button id="download-button">Print PDF</button>
  <script>
	const button = document.getElementById('download-button');

	    function generatePDF() {
				// Choose the element that your content will be rendered to.
				const element = document.getElementById('invoice');
				const options = {
	                filename: 'Privacy Policy.pdf',
                };
				// Choose the element and save the PDF for your user.
				html2pdf().set(options).from(element).save();
			}

			button.addEventListener('click', generatePDF);
	</script>
  <div class="biden--img d-none"></div>
</section>
    <section class="pri-poli-page">
</div>  
<div class="print-section" id="invoice">
<div class="container">
            <p>@lang('words.Privacy:p')</p>
            <p>@lang('words.Privacy:p1') <b>“2024usapresidentialelection.com”</b>, @lang('words.Privacy:p2')
                <b>“@lang('words.Service')”</b>, @lang('words.Privacy:p3')
            </p>
            <p>@lang('words.Privacy:p4')</p>
            <p><b>@lang('words.Accessibility:')</b> @lang('words.Accessibility:p')</p>
            <div class="TABLE-OF-CONTENTS">
                <h2>@lang('words.TABLE OF CONTENTS') </h2>
                <ol class="table-content-list">
                    <li class="list">
                        <a href="#pbd_point-one">
                            @lang('words.INFORMATION COLLECTION')
                        </a>
                    </li>
                    <li class="list pbd_point-two">
                        <a href="#pbd_point-two">
                            @lang('words.USE OF INFORMATION')
                        </a>
                    </li>
                    <li class="list">
                        <a href="#pbd_point-three">
                            @lang('words.DATA RETENTION')
                        </a>
                    </li>
                    <li class="list">
                        <a href="#pbd_point-four">
                            @lang('words.INFORMATION SHARING AND DISCLOSURE')
                        </a>
                    </li>
                    <li class="list">
                        <a href="#pbd_point-five">
                            @lang('words.YOUR CHOICES AND RIGHTS')
                        </a>
                    </li>
                    <li class="list">
                        <a href="#pbd_point-six">
                            @lang('words.SECURITY')
                        </a>
                    </li>
                    <li class="list">
                        <a href="#pbd_point-seven">
                            @lang('words.CROSS-BORDER DATA TRANSFERS')
                        </a>
                    </li>
                    <li class="list">
                        <a href="#pbd_point-eight">
                            @lang('words.LINKS TO OTHER SITES')
                        </a>
                    </li>
                    <li class="list">
                        <a href="#pbd_point-nine">
                            @lang('words.CHANGES TO THIS POLICY')
                        </a>
                    </li>
                    <li class="list">
                        <a href="#pbd_point-ten">
                            @lang('words.CONTACT US')
                        </a>
                    </li>
                    <?php $language = session()->get('locale') ?>
                    @if($language == 'fr')
                        <li class="list">
                            <a href="#pbd_point_eleven">RECLAMATION</a>
                        </li>
                    @else
                        <li class="list">
                            <a href="#pbd_point_eleven">COMPLAINT</a>
                        </li>
                    @endif
                    @if($language == 'fr')
                        <li class="list">
                            <a href="#pbd_point_twelve">SUPPRESSION DE VOS DONNEES PERSONNELLES – DROIT A L’EFFACEMENT</a>
                        </li>
                    @else
                        <li class="list">
                            <a href="#pbd_point_twelve">DELETION OF YOUR PERSONAL DATA – RIGHT TO ERASURE</a>
                        </li>
                    @endif
                </ol>
            </div>
            <div class="list-content">
                <ol>
                    <li class="list-headings">
                        <h2 id="pbd_point-one"> @lang('words.INFORMATION COLLECTION') </h2>
                    </li>
                    <ol type="a" class="sub-headings">
                        <li>
                            <h3>@lang('words.Information You Provide to Us')</h3>
                            <p>
                                @lang('words.Information You Provide to Us:p')
                            </p>
                            <p>@lang('words.Information You Provide to Us:p1')</p>
                        </li>
                        <div style="overflow-x:auto;">
                            <table>
                                <tr>
                                    <th>@lang('words.Categories of Personal Information We Collect')</th>
                                    <th>@lang('words.Examples of Personal Information Collected')</th>
                                    <th>@lang('words.Categories of Sources of Personal Information')</th>
                                    <th>@lang('words.Business Purpose for Collection of Personal Information')</th>
                                </tr>
                                <tr>
                                    <th>@lang('words.Identifiers') </th>
                                    <td>@lang('words.Identifiers:p')</td>
                                    <td>@lang('words.Identifiers:p1')</td>
                                    <td>@lang('words.Identifiers:p2')</td>
                                </tr>
                                <tr>
                                    <th>@lang('words.Contact / Account Profile Information')</th>
                                    <td>@lang('words.Contact / Account Profile Information:p')</td>
                                    <td>@lang('words.Contact / Account Profile Information:p1')</td>
                                    <td>@lang('words.Contact / Account Profile Information:p2')
                                    </td>
                                </tr>
                                <tr>
                                    <th>@lang('words.Sensitive Personal Information / Government Issued Identification Numbers')</th>
                                    <td>@lang('words.Sensitive Personal Information / Government Issued Identification Numbers:p')</td>
                                    <td>@lang('words.Directly from You')</td>
                                    <td>@lang('words.Sensitive Personal Information / Government Issued Identification Numbers:p1')</td>
                                </tr>
                                <tr>
                                    <th>@lang('words.Commercial Information')</th>
                                    <td>@lang('words.Commercial Information:p')</td>
                                    <td>@lang('words.Commercial Information:p1')</td>
                                    <td>@lang('words.Commercial Information:p2')</td>
                                </tr>
                                <tr>
                                    <th>@lang('words.Financial Data/Payment Information')</th>
                                    <td>@lang('words.Financial Data/Payment Information:p')</td>
                                    <td>@lang('word.Financial Data/Payment Information:p1')</td>
                                    <td>@lang('words.Financial Data/Payment Information:p2')</td>
                                </tr>
                                <tr>
                                    <th>@lang('words.Internet or Other Network or Device Activities Including Information from Cookies')
                                    </th>
                                    <td>@lang('words.Internet or Other Network or Device Activities Including Information from Cookies:p')</td>
                                    <td>@lang('words.Internet or Other Network or Device Activities Including Information from Cookies:p1')</td>
                                    <td>@lang('words.Internet or Other Network or Device Activities Including Information from Cookies:p2')</td>
                                </tr>
                                <tr>
                                    <th>@lang('words.Approximate Geolocation Information')</th>
                                    <td>@lang('words.Your approximate location')</td>
                                    <td>@lang('words.Approximate Geolocation Information:p')</td>
                                    <td>@lang('words.Approximate Geolocation Information:p1')</td>
                                </tr>
                                <tr>
                                    <th>@lang('words.Sensory Information') </th>
                                    <td>@lang('words.Sensory Information:p')</td>
                                    <td>@lang('words.Sensory Information:p1')</td>
                                    <td>@lang('words.Sensory Information:p2')</td>
                                </tr>
                                <tr>
                                    <th>@lang('words.Platform Communications')</th>
                                    <td>@lang('words.Platform Communications:p') </td>
                                    <td>@lang('words.Platform Communications:p1')</td>
                                    <td>@lang('words.Platform Communications:p2')</td>
                                </tr>
                                <tr>
                                    <th>@lang('words.Professional Information')</th>
                                    <td>@lang('words.Professional Information:p')</td>
                                    <td>@lang('words.Professional Information:p1') </td>
                                    <td>@lang('words.Professional Information:p2')</td>
                                </tr>
                                <tr>
                                    <th>@lang('words.Other information that identifies or can be reasonably associated with you') </th>
                                    <td>@lang('words.Other information that identifies or can be reasonably associated with you:p')</td>
                                    <td>@lang('words.Other information that identifies or can be reasonably associated with you:p1')</td>
                                    <td>@lang('words.Other information that identifies or can be reasonably associated with you:p2')</td>
                                </tr>
                            </table>
                        </div>
                        <br />
                        <li>
                            <h3>@lang('words.Non-Identifying Information and De-Identified Information')</h3>
                            <ul type="square" class="square">
                                <li><b>@lang('words.Non-Identifying Information/Usernames:') </b>@lang('words.Non-Identifying Information/Usernames:p')</li>
                                <li><b>@lang('words.Combination of Personal and Non-Identifying Information:')</b> @lang('words.Combination of Personal and Non-Identifying Information:p')</li>
                                    <li><b>@lang('words.De-Identified Information:') </b>@lang('words.De-Identified Information:p') <b>(“De-Identified Information”)</b>. @lang('words.De-Identified Information:p2')</li>
                            </ul>
                        </li>
                        <li>
                            <h3>@lang('words.Information Collected Automatically')</h3>
                            <p>@lang('words.Information Collected Automatically:p')</p>
                            <p>@lang('words.Information Collected Automatically:p1')</p>
                        </li>
                        <li>
                            <h3>@lang('words.Analytics Providers, Ad Servers and Similar Third Parties')</h3>
                            <p>@lang('words.Analytics Providers, Ad Servers and Similar Third Parties:p')</p>
                            <p>@lang('words.Analytics Providers, Ad Servers and Similar Third Parties:p1')</p>
                            <p>@lang('words.Analytics Providers, Ad Servers and Similar Third Parties:p2') <b>(“NAI”)</b> @lang('words.Analytics Providers, Ad Servers and Similar Third Parties:p4') <b>(“DAA”)</b> @lang('words.Analytics Providers, Ad Servers and Similar Third Parties:p6')</p>
                        </li>
                        <li>
                            <h3>@lang('words.Do Not Track Signals and GPC')</h3>
                            <p>@lang('words.Do Not Track Signals and GPC:p')</p>
                            <p>@lang('words.Do Not Track Signals and GPC:p1')</p>
                        </li>
                        <li>
                            <h3>@lang('words.Children')</h3>
                            <p>@lang('words.Children:p')</p>
                        </li>
                    </ol>
                    <li class="list-headings">
                        <h2 id="pbd_point-two"> @lang('words.USE OF INFORMATION') </h2>
                        <ol type="a" class="sub-headings">
                            <li>
                                <h3>@lang('words.We Use Information We Collect:')</h3>
                                <ul type="square" class="square">
                                    <li>@lang('words.We Use Information We Collect:p')</li>
                                    <li>@lang('words.We Use Information We Collect:p1')</li>
                                    <li>@lang('words.We Use Information We Collect:p2')

                                    </li>
                                    <li>@lang('words.We Use Information We Collect:p3')

                                    </li>
                                    <li>@lang('words.We Use Information We Collect:p4')

                                    </li>
                                    <li>@lang('words.We Use Information We Collect:p5')
                                    </li>
                                    <li>@lang('words.We Use Information We Collect:p6')

                                    </li>
                                    <li>@lang('words.We Use Information We Collect:p7')

                                    </li>
                                    <li>@lang('words.We Use Information We Collect:p8')
                                        <ul type="circle">
                                            <li>@lang('words.We Use Information We Collect:p9')

                                            </li>
                                            <li>@lang('words.We Use Information We Collect:p10')
                                            </li>
                                            <li>@lang('words.We Use Information We Collect:p11')

                                            </li>
                                            <li>@lang('words.We Use Information We Collect:p12')

                                            </li>
                                            <li>@lang('words.We Use Information We Collect:p13')

                                            </li>
                                            <li>@lang('words.We Use Information We Collect:p14')

                                            </li>
                                            <li>@lang('words.We Use Information We Collect:p15')

                                            </li>
                                            <li>@lang('words.We Use Information We Collect:p16')

                                            </li>
                                            <li>@lang('words.We Use Information We Collect:p17')

                                            </li>
                                            <li>@lang('words.We Use Information We Collect:p18')

                                            </li>
                                            <li>@lang('words.We Use Information We Collect:p19')

                                            </li>
                                            <li>@lang('words.We Use Information We Collect:p20')
                                            </li>
                                            <li>@lang('words.We Use Information We Collect:p21')
                                            </li>
                                            <li>@lang('words.We Use Information We Collect:p22')
                                            </li>
                                            <li>@lang('words.We Use Information We Collect:p23')
                                            </li>

                                        </ul>
                                    </li>
                                    <li>@lang('words.We Use Information We Collect:p24')

                                    </li>
                                </ul>
                            </li>
                        </ol>
                    </li>
                    <li class="list-headings">
                        <h2 id="pbd_point-three"> @lang('words.DATA RETENTION')</h2>
                        <p>@lang('words.DATA RETENTION:p')</p>
                        {{-- <ol type="a" class="sub-headings"></ol> --}}
                    </li>
                    <li class="list-headings">
                        <h2 id="pbd_point-four"> @lang('words.INFORMATION SHARING AND DISCLOSURE')</h2>
                        <p><b>@lang('words.We do not sell your Personal Information for monetary consideration,')</b> @lang('words.INFORMATION SHARING AND DISCLOSURE:p')</p>
                        {{-- <ol type="a" class="sub-headings"></ol> --}}
                        <div style="overflow-x:auto;">
                            <table>
                                <tr>
                                    <th>@lang('words.Service Providers')</th>
                                    <td>@lang('words.Service Providers:p')
                                    </td>

                                </tr>
                                <tr>
                                    <th>@lang('words.Generative AI Partners')</th>
                                    <td>@lang('words.Generative AI Partners:p')

                                    </td>
                                </tr>
                                <tr>
                                    <th>@lang('words.Legal and Investigative Purposes')</th>
                                    <td>@lang('words.Legal and Investigative Purposes:p')
                                    </td>
                                </tr>
                                <tr>
                                    <th>@lang('words.Sweepstakes, Contests, and Promotions')</th>
                                    <td>@lang('words.Sweepstakes, Contests, and Promotions:p') “
                                        <b>Promotion</b>”) @lang('words.Sweepstakes, Contests, and Promotions:p2')
                                    </td>
                                </tr>
                                <tr>
                                    <th>@lang('words.Non-Identifying Information and De-Identified Information')</th>
                                    <td>@lang('words.Non-Identifying Information and De-Identified Information:p')</td>
                                </tr>
                            </table>
                        </div>
                        <br />

                        <div style="overflow-x:auto;">
                            <table>
                                <tr>
                                    <th>@lang('words.Categories of Personal Information We Have Shared in the Preceding 12 Months')</th>
                                    <th>@lang('words.Categories of Third Parties with whom We Share Personal Information')</th>
                                    <th>@lang('words.Whether This Category is Used for Targeted Advertising')</th>
                                </tr>
                                <tr>
                                    <td>@lang('words.Identifiers') </td>
                                    <td>@lang('words.Identifiers:2')</td>
                                    <td>@lang('words.Yes')</td>
                                </tr>
                                <tr>
                                    <td>@lang('words.Contact Information')</td>
                                    <td>@lang('words.Contact Information:p')</td>
                                    <td>@lang('words.Yes')</td>
                                </tr>
                                <tr>
                                    <td>@lang('words.Sensitive Personal Information / Government Issued Identification Numbers')</td>
                                    <td>@lang('words.Sensitive Personal Information / Government Issued Identification Numbers:2')</td>
                                    <td>@lang('words.No')</td>
                                </tr>
                                <tr>
                                    <td>@lang('words.Commercial Information')</td>
                                    <td>@lang('words.Commercial Information:2')</td>
                                    <td>@lang('words.No')</td>
                                </tr>
                                <tr>
                                    <td>@lang('words.Financial Data/Payment Information') </td>
                                    <td>@lang('words.Financial Data/Payment Information:2')</td>
                                    <td>@lang('No')</td>
                                </tr>
                                <tr>
                                    <td>@lang('words.Internet or Other Network or Device Activities Including Information from Cookies')</td>
                                    <td>@lang('words.Internet or Other Network or Device Activities Including Information from Cookies:p')</td>
                                    <td>@lang('words.Yes')</td>
                                </tr>
                                <tr>
                                        <td>@lang('words.Approximate Geolocation Information')</td>
                                    <td>@lang('words.Approximate Geolocation Information:2')</td>
                                    <td>@lang('words.Yes')</td>
                                </tr>
                                <tr>
                                    <td>@lang('words.Sensory Information') </td>
                                    <td>@lang('words.Sensory Information')</td>
                                    <td>@lang('words.No')</td>
                                </tr>
                            </table>
                        </div>
                        <br />
                    </li>
                    <li class="list-headings">
                        <h2 id="pbd_point-five"> @lang('words.YOUR CHOICES AND RIGHTS')</h2>
                        <p>@lang('words.YOUR CHOICES AND RIGHTS:2')</a>.</p>
                        <p>@lang('words.YOUR CHOICES AND RIGHTS:2p')
                        </p>
                        <ol type="a" class="sub-headings">
                            <li>
                                <h4>@lang('words.For Individuals Located in the European Economic Area (EEA), United Kingdom (UK) or Switzerland:')</h4>
                                <p>@lang('words.For Individuals Located in the European Economic Area (EEA), United Kingdom (UK) or Switzerland:p')</p>
                                <ul type="square" class="square">
                                    <li>@lang('words.For Individuals Located in the European Economic Area (EEA), United Kingdom (UK) or Switzerland:p2')</li>
                                    <li>@lang('words.For Individuals Located in the European Economic Area (EEA), United Kingdom (UK) or Switzerland:p3')</li>
                                    <li>@lang('words.For Individuals Located in the European Economic Area (EEA), United Kingdom (UK) or Switzerland:p4')</li>
                                    <li>@lang('words.Have the processing of your personal information restricted;')</li>
                                    <li>@lang('words.Object to further processing of your personal information, including to object to marketing from us;')</li>
                                    <li>@lang('words.Make a data portability request;')</li>
                                    <li>@lang('words.Withdraw any consent you have provided to us;')</li>
                                    <li>@lang('words.Restrict any automatic processing of your personal information; and')</li>
                                    <li>@lang('words.Complain to the appropriate Supervisory Authority.')</li>
                                </ul>
                                <p>To exercise any of these rights, please contact us at <a
                                        href="">contact@2024usapresidentialelection.com</a></p>
                            </li>
                            <li>
                                <h4>@lang('words.Notice for California Residents')</h4>
                                <p><b>@lang('words.“Shine the Light” and “Eraser” Laws:')</b> @lang('words.“Shine the Light” and “Eraser” Laws:p')</p>
                                <p><b>@lang('words.California Consumer Privacy Act (CCPA)/California Privacy Rights Act (CPRA):')</b> @lang('words.California Consumer Privacy Act (CCPA)/California Privacy Rights Act (CPRA):p')
                                </p>
                                <p>@lang('words.California Consumer Privacy Act (CCPA)/California Privacy Rights Act (CPRA):p1')</p>
                                <ul type="square" class="square">
                                    <li>@lang('words.California Consumer Privacy Act (CCPA)/California Privacy Rights Act (CPRA):p1')
                                    </li>
                                    <li>@lang('words.The categories of personal information we have collected about you.')
                                    </li>
                                    <li>@lang('words.The specific pieces of personal information we have collected about you.')
                                    </li>
                                    <li>@lang('words.Our business or commercial purpose for collecting or “selling” your personal information as defined by the CCPA.')
                                    </li>
                                    <li>@lang('words.The categories of third parties to whom we have sold or shared your personal information, if any, and the categories of personal information that we have shared with each third-party recipient.')
                                    </li>
                                </ul>
                                <p>@lang('words.Your Right to Opt-Out of “Sale” or “Sharing” of Personal Information: California residents have the right to opt-out of the “sale” or “sharing” of their personal information as defined by the CCPA by contacting us contact@2024usapresidentialelection.com')

                                </p>
                                <p>@lang('words.Please note that we do not knowingly “sell” the personal information of any individuals under the age of 18.')

                                </p>
                                <p>@lang('words.Where we are “sharing” your personal information with third parties for the purposes of cross-context behavioral advertising or profiling, you may opt-out of such sharing at any time by submitting a request as directed on the homepage of our website or by contacting us using the information in the “Contact Us” section below.')

                                </p>
                                <p>@lang('words.Your Right to Delete: California residents have the right to request that we delete any of the personal information collected from you and retained by us, subject to certain exceptions. We may ask you to provide certain information to identify yourself so that we may compare it with our records in order to verify your request. Once your request is verified and we have determined that we are required to delete the requested personal information in accordance with the CCPA, we will delete, and direct our service providers to delete your personal information from their records. Your request to delete personal information that we have collected may be denied if we conclude it is necessary for us to retain such personal information under one or more of the exceptions listed in the CCPA.')

                                </p>
                                <p>@lang('words.Your Right to Delete: California residents have the right to request that we delete any of the personal information collected from you and retained by us, subject to certain exceptions. We may ask you to provide certain information to identify yourself so that we may compare it with our records in order to verify your request. Once your request is verified and we have determined that we are required to delete the requested personal information in accordance with the CCPA, we will delete, and direct our service providers to delete your personal information from their records. Your request to delete personal information that we have collected may be denied if we conclude it is necessary for us to retain such personal information under one or more of the exceptions listed in the CCPA.')

                                </p>
                                <p>@lang('words.Your Right to Correct: Under the CCPA, as amended by the CPRA, California residents have the right to request that we correct any inaccurate personal information we maintain about you, taking into account the nature of the personal information and the purposes for which we are processing such personal information. We will use commercially reasonable efforts to correct such inaccurate personal information about you.')

                                </p>
                                <p>@lang('words.Non-Discrimination: You will not receive any discriminatory treatment by us for the exercise of your privacy rights conferred by the CCPA.')

                                </p>
                            </li>
                            <li>
                                <h4>@lang('words.Notice for Residents of Certain Other U.S. States')</h4>
                                <p>@lang('words.The laws of your state of residence (“Applicable State Law”) may provide you with certain rights, including the following: Your Right to Confirm and Access: You have the right to confirm whether we are processing personal information about you and access the personal information we process about you.')
                                </p>
                                <p>@lang("words.Your Right to Portability: You have to right to obtain a copy of the personal information we maintain and process about you in a portable and, to the extent technically feasible, readily-usable format.")</p>
                                <p>@lang('words.Your Right to Delete: You have the right to request that we delete the personal information we maintain or process about you.')</p>
                                
                                <p>Your Right to Correct: You have the right to request that we correct inaccuracies in the personal information we maintain or process about you, taking into consideration the nature and purpose of such processing.</p>
                                
                                <p>@lang('words.Your Rights to Opt-Out: You have the right to opt-out of certain types of processing of personal information, including:')</p>
                                <ul type="square" class="square">
                                    <li>@lang('words.Opt-Out of the “sale” of personal information as defined by Applicable State Law;')
                                    </li>
                                    <li>@lang('words.Opt-Out of targeted advertising by us;')</li>
                                    <li>@lang('words.Opt-Out of automated profiling for the purposes of making decisions that produce legal or similarly significant effects.')</li>
                                </ul>
                                <p>@lang('words.dashboard:text')</p>
                            </li>
                            <li>
                                <h4>@lang('words.Appeals Process & Other Concerns')</h4>
                                <p>@lang('words.Appeals Process & Other Concerns:p')
                                </p>
                            </li>
                        </ol>
                    </li>
                    <li class="list-headings">
                        <h2 id="pbd_point-six"> @lang('words.SECURITY')</h2>
                        <p>@lang('words.SECURITY:2')</p>
                        <p>@lang('words.SECURITY:2p') </p>
                    </li>
                    <li class="list-headings">
                        <h2 id="pbd_point-seven"> @lang('words.CROSS-BORDER DATA TRANSFERS')</h2>
                        <p>@lang('words.CROSS-BORDER DATA TRANSFERS:2')</p>
                        <p>@lang('words.CROSS-BORDER DATA TRANSFERS:2p')
                        </p>
                        <ol type="a" class="sub-headings"></ol>
                    </li>
                    <li class="list-headings">
                        <h2 id="pbd_point-eight"> @lang('words.LINKS TO OTHER SITES')</h2>
                        <p>@lang('words.LINKS TO OTHER SITES:2')</p>
                        <ol type="a" class="sub-headings"></ol>
                    </li>
                    <li class="list-headings">
                        <h2 id="pbd_point-nine"> @lang('words.CHANGES TO THIS POLICY')</h2>
                        <p>@lang('words.CHANGES TO THIS POLICY:2')
                        </p>
                        <ol type="a" class="sub-headings"></ol>
                    </li>
                    @if($language == 'fr')
                        <li class="list-headings">
                            <h2 id="pbd_point-ten">CONTACTEZ-NOUS</h2>
                            <p>Si vous avez des questions concernant cette politique de confidentialité, veuillez nous contacter :</p>
                            <ul>
                                <li>
                                    par courriel : <a href="mailto:contact@2024usapresidentialelection.com">contact@2024usapresidentialelection.com</a>
                                </li>
                                <li>par courrier : Field Street Analytics, Rue des Champs, 25a - L-7312 Steinsel-Müllendorf, Grand-Duché de Luxembourg</li>   
                            </ul>
                            <ol type="a" class="sub-headings"></ol>
                        </li>
                    @else
                        <li class="list-headings">
                            <h2 id="pbd_point-ten"> @lang('words.CONTACT US')</h2>
                            <p>@lang('words.CONTACT US:2')</p>
                            <ul>
                                <li>
                                    by email: <a href="mailto:contact@2024usapresidentialelection.com">contact@2024usapresidentialelection.com</a>
                                </li>
                                <li>By mail: Field Street Analytics, Rue des Champs, 25a - L-7312 Steinsel-Müllendorf, Grand-Duché de Luxembourg
                                </li>   
                            </ul>
                            <ol type="a" class="sub-headings"></ol>
                        </li>
                    @endif
                    @if($language == 'fr')
                        <li class="list-headings">
                            <h2 id="pbd_point_eleven">RECLAMATION</h2>
                            <p>Si vous estimez, après nous avoir contactés, que vos droits protégés par le Règlement Général sur la Protection des Données ne sont pas respectés, vous pouvez adresser une réclamation auprès de l’’autorité de contrôle luxembourgeoise : Commission Nationale pour la Protection des Données (CNPD), 1, Avenue du Rock’n’Roll, L-4361 Esch-sur-Alzette, Grand-Duché de Luxembourg</p>
                        </li>
                    @else 
                        <li class="list-headings">
                            <h2 id="pbd_point_eleven">COMPLAINT</h2>
                            <p>If, after contacting us, you believe that your rights protected by the General Data Protection Regulation are not being respected, you may lodge a complaint with the Luxembourg supervisory authority: Commission Nationale pour la Protection des Données (CNPD), 1, Avenue du Rock’n’Roll, L-4361 Esch-sur-Alzette, Grand-Duché de Luxembourg</p>
                        </li>
                    @endif
                    @if($language == 'fr')
                        <li class="list-headings">
                            <h2 id="pbd_point_twelve">SUPPRESSION DE VOS DONNEES PERSONNELLES – DROIT A L’EFFACEMENT</h2>
                            <p>Pour toutes demandes de droit d'effacement, vous pouvez nous contacter :</p>
                            <ul>
                                <li>par courriel : <a href="mailto:contact@2024usapresidentialelection.com">contact@2024usapresidentialelection.com</a></li>
                                <li>par courrier : Field Street Analytics, Rue des Champs, 25a - L-7312 Steinsel-Müllendorf, Grand-Duché de Luxembourg</li>
                            </ul>
                        </li>
                    @else
                        <li class="list-headings">
                            <h2 id="pbd_point_twelve">DELETION OF YOUR PERSONAL DATA – RIGHT TO ERASURE</h2>
                            <p>For any requests for the right to erasure, you can contact us:</p>
                            <ul>
                                <li>by email: <a href="mailto:contact@2024usapresidentialelection.com" >contact@2024usapresidentialelection.com</a></li>
                                <li>by mail : Field Street Analytics, Rue des Champs, 25a - L-7312 Steinsel-Müllendorf, Grand-Duché de Luxembourg</li>
                            </ul>
                        </li>
                    @endif
                </ol>
            </div>
        </div>
    
</div>
<div class="no-print">
    </section>
@endsection
</div>

