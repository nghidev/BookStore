@extends('layouts.fe')
@section('content')
    <section id="itemboxes ">



        <div class="container p-5" id="code_card_itembox">
            <div class="row">
                @foreach ($orders as $item)
                    <div class="col-md-3 mb15">
                        <article class="box h-100">
                            <figure class="itembox text-center">
                                <span class="mt-2 icon-wrap rounded icon-sm bg-warning">#{{ $item->id }}</span>
                                <figcaption class="text-wrap">
                                    <h5 class="title">Mã đơn:<a
                                            href="{{ url('fe/viewOrderDetail') }}/{{ $item->id }}">{{ $item->code }}</a>
                                    </h5>
                                    {{-- <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod </p> --}}
                                </figcaption>
                            </figure> <!-- iconbox // -->
                        </article> <!-- panel-lg.// -->
                    </div> <!-- row.// -->
                @endforeach
            </div> <!-- code-wrap.// -->
    </section>
@endsection
