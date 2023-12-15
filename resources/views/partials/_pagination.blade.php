<div class="d-flex justify-content-center">
    <nav aria-label="Page navigation example" style="margin-top: 50px;">
        <ul class="pagination pagination-lg">
            <li class="page-item"><a class="page-link" href="#">{{ $first }}</a>
            @for ($i = 1; $i < 10; $i++)
                <li class="page-item"><a class="page-link" href="#">{{ $i }}</a>
                </li>
            @endfor
            <li class="page-item"><a class="page-link" href="#">{{ $last }}</a>
        </ul>
    </nav>
</div>