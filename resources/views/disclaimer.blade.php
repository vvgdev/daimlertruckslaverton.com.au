@extends('layouts.app')

@section('content')
<section class="middle-section">
    <!--Internal Banner-->
    <section class="internal-banner">
        <img width="1441" height="179" src="{{ asset('images/inner-banner.png') }}" alt="Our Inventory">
        <div class="container">
            <h1>Disclaimer</h1>
        </div>
    </section>
    <!--Internal Banner-->
    <div class="container">
        <div class="disclaimer page-multi mt-5">
            <div class="content para">
                <p>We have made every effort to maintain the accuracy of the information  on this site. Copyright in the material on this site is owned by us.</p>
                <ol>
                    <li>The information contained on this site:
                        <ul>
                            <li>Is for general information only and does not purport to be comprehensive;</li>
                            <li>Is current only at the time it is placed on this site and  our employees and agents are under no obligation to update the  information or correct any inaccuracy which may become apparent at a  later time; and</li>
                            <li>Is not intended to provide or make any recommendation or binding offer on which you should rely for any purpose whatsoever.</li>
                        </ul>
                    </li>
                    <li>We do not give any warranty as to the accuracy of the  information contained on its website or the availability of the vehicles  listed and, if you rely on it, you do so at your own risk.</li>
                    <li>Any prices specified on this site are in Australian dollars.</li>
                    <li>All listed vehicles are subject to prior sale. Check with us for the current status of all listed vehicles.</li>
                    <li>To the extent permitted by law, we specifically exclude any  liability for any error or inaccuracy in, or omissions from, its website  and disclaims any liability for any loss or damage which you or any  other person has suffered by relying on any information on this website  whether caused by the negligence of this company or otherwise. Under no  circumstances will this company or any of its employees and agents be  liable for any incidental, special or consequential damages, including  damages for loss of business or other profits arising as a result of the  use of material which appears on this website.</li>
                </ol>
            </div>
        </div>
    </div>
</section>
@endsection        