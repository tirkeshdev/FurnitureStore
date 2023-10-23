@extends('layouts.app')

@section('title')
    @lang('app.appName')
@endsection

@section('body')
    <div class="ps-5">
        <div class="ps-5">
            <div class="ps-5">
                <div class="card text-center" style="width:60rem;margin:40px 0 48px 0">
                    <img class="card-img-top pb-4" src="{{asset('img/ilon.png')}}" alt="image" style="width:100%">
                    <div class="card-body pb-5">
                        <h4 class="card-title pb-2">{{$seller->name}} <span
                                    class="h5 text-primary fw-normal">({{$seller->number}})</span></h4>
                        <div class="text-secondary pb-4">{{$seller->location->name}}</div>
                        <p class="card-text">{{$seller->name}} enjoy generating works of art, which serve to enhance the
                            aesthetic
                            richness and value of daily life. That is, {{$seller->name}}'s art furniture creations are
                            intended—for
                            the most part—to be functional, yet deeply imbued with expressive content. Nearly all of
                            {{$seller->name}}'s creations are “one-of-a-kind” pieces, or Limited Editions.
                            The materials employed are principally hardwoods (domestic and exotic), and various
                            finishes that protect and enhance without significantly altering the natural grain and
                            color of wood. The joinery employed is both traditional and non-traditional, depending
                            upon the aesthetic and structural requirements of each piece.
                            {{$seller->name}}'s great joy in making a piece of furniture is just that—creating—a piece
                            of furniture:
                            A thought, which develops into an idea, which then moves toward thinking (designing in
                            one’s mind) about function, shape, color, dimensions, wood species. Then begins the
                            actual “paper and pencil” design work. (While some of {{$seller->name}}'s work has been
                            influenced by art
                            history, all of the represented works are original designs—generated from within.) Once
                            the design is complete, {{$seller->name}} send it to the client for feedback.
                            Finally, {{$seller->name}} travel to a
                            lumber supplier, where between one and three hours is invested, poring over the
                            available possibilities for a piece. All of this happens before {{$seller->name}} can bring
                            the
                            “potential” piece into {{$seller->name}}'s shop to begin building.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection