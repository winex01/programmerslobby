@extends('layouts.master')

@section('content')
    <br>
    <div class="row">
        <div class="col-lg-8">

            <div class="card border-0 shadow mb-4">
                <div class="card-body">

                    <h1>Terms And Privacy</h1>

                        <p>
                            Welcome aboard. If you continue to browse and use this website, you are 
                            agreeing to comply with and be bound by the following terms and conditions of use, 
                            which together with our privacy policy govern <span class="text-primary">Programmers Lobby</span> relationship with 
                            you in relation to this website. If you disagree with any part of these terms and 
                            conditions, please do not use our website.
                        </p>

                        <p>
                            The term '<span class="text-primary">Programmers Lobby</span>' or 'us' or 'we' refers to the owner of the website. 
                            The term 'you' refers to the user or viewer of our website.
                        </p>


                        <p>
                            The use of this website is subject to the following terms of use:
                        </p>
                        
                        <ul>
                            <li class="mb-2">The content of the pages of this website is for your general information and use only. It is subject to change without notice.</li>
                            <li class="mb-2">This website uses cookies to monitor browsing preferences. If you do allow cookies to be used, the following personal information may be stored by us for use by third parties in the future.</li>
                            <li class="mb-2">Neither we nor any third parties provide any warranty or guarantee as to the accuracy, timeliness, performance, completeness or suitability of the information and materials found or offered on this website for any particular purpose. You acknowledge that such information and materials may contain inaccuracies or errors and we expressly exclude liability for any such inaccuracies or errors to the fullest extent permitted by law.</li>
                            <li class="mb-2">Your use of any information or materials on this website is entirely at your own risk, for which we shall not be liable. It shall be your own responsibility to ensure that any products, services or information available through this website meet your specific requirements.</li>
                            <li class="mb-2">This website contains material which is owned by or licensed to us. This material includes, but is not limited to, the design, layout, look, appearance and graphics. Reproduction is prohibited other than in accordance with the copyright notice, which forms part of these terms and conditions.</li>
                            <li class="mb-2">All trade marks reproduced in this website which are not the property of, or licensed to, the operator are acknowledged on the website. Unauthorised use of this website may give rise to a claim for damages and/or be a criminal offence.</li>
                            <li class="mb-2">From time to time this website may also include links to other websites. These links are provided for your convenience to provide further information. They do not signify that we endorse the website(s). We have no responsibility for the content of the linked website(s).</li>
                        </ul>

                </div>
            </div>

            @include('adsense.square')

        </div>

        <div class="col-lg-4">
            @include('layouts.facebook-page-widget')
            @include('adsense.side')
            @include('layouts.suggested-projects-widget')
        </div>
        
    </div>
    <br>
@endsection