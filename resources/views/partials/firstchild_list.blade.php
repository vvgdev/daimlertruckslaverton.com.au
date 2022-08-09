<table class="table table-borderless" border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate;border-spacing: 0 1em;">
    <tr>
        <th>Series</th>
        <th>Category</th>
        <th>Model</th>
        <th>GVM</th>
        <th>GCM</th>
        <th>Max Power (KW/RPM)</th>
        <th>Max Torque (NM/RPM)</th>
        <th>Spec Sheet</th>
    </tr>
    @if(isset($response['truck_data']) && sizeof($response['truck_data']) > 0)
        @foreach($response['truck_data'] as $truck_info)
            @if($response['record']['id'] == $truck_info['firstchild_id'])
            <tr>
                @if(isset($truck_info['gallery_data' ]))
                    @foreach($truck_info['gallery_data' ] as $key=>$gallery)
                        <td><img src="{{ env('IMG_URL') }}{{ $gallery['gallery_image'] }}" height="80"/> </td>
                    @endforeach
                @endif
                <!-- <td><img src="https://www.velocitytruckcentres.com.au/storage/app/media/147024_canter-413-city-cab-06-nov-19-mj.png" height="80"/> </td> -->
                <td>{{ $truck_info['sub_brand_name' ]}}</td>
                <td>{{ $truck_info['name' ]}}</td>
                <td>{{ $truck_info['gvm' ]}}</td>
                <td>{{ $truck_info['gcm' ]}}</td>
                <td>{{ $truck_info['max_power' ]}}</td>
                <td>{{ $truck_info['max_torque' ]}}</td>
                <td>
                    @if(isset($truck_info['brochure' ]) && sizeof($truck_info['brochure' ]) > 0)
                        @foreach($truck_info['brochure'] as $brochure_info)
                            <a href="{{ env('IMG_URL') }}{{ $brochure_info['brochure_file'] }}" target="_blank"><img src="/images/pdf.png" alt="Our Inventory" width="45"></a>
                        @endforeach
                    @endif
                </td>
            </tr>
            @endif
        @endforeach
    @endif
</table>