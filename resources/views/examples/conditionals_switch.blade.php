@isset($month)
    @switch($month)
        @case(1)
            <p>January</p>
        @break

        @case(2)
            <p>February</p>
        @break

        @case(3)
            <p>March</p>
        @break

        @case(4)
            <p>April</p>
        @break

        @case(5)
            <p>May</p>
        @break

        @case(6)
            <p>June</p>
        @break

        @case(7)
            <p>July</p>
        @break

        @case(8)
            <p>August</p>
        @break

        @case(9)
            <p>September</p>
        @break

        @case(10)
            <p>October</p>
        @break

        @case(11)
            <p>November</p>
        @break

        @case(12)
            <p>December</p>
        @break

        @default
            <p>Invalid month</p>
    @endswitch
@endisset

@empty($month)
    <p>No month</p>
@endempty
