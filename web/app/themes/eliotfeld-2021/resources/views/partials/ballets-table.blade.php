<table id="balletsTable">
        <thead>
    <tr id="balletsHeader">
            <th class="sort header-name col">Ballets</th>
            <th class="sort header-year col-md-1">Year</th>
            <th class="sort header-composer col-md-2">Composer</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($ballets as $ballet)
        <tr class="ballet">
            <td class="ballet-name col">
                <a href="{{ get_permalink($ballet->ID) }}">
                    {{ $ballet->post_title }}
                </a>
            </td>
            <td class="ballet-year">
                @php $generalInfo = get_field('general_info', $ballet->ID) @endphp
                @if($generalInfo)
                {{ $generalInfo['year'] }}
                @endif
            </td>
            <td class="ballet-composer">
                @php $music = get_field('music', $ballet->ID) @endphp
                @if($music)
                    @if($music['composer'])
                        {{ get_the_title($music['composer']) }}
                    @endif
                @endif
            </td>
        </tr>
    @endforeach
    </tbody>
    </table>