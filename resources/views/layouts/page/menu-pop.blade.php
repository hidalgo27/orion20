<!-- Modal -->
<div class="modal left fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body pb-0">
                <div class="row">
                    <div class="col">
                        <img src="{{asset('images/descarga.jpg')}}" alt="" class="w-100">
                    </div>
                    <div class="col-auto">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <hr class="my-4">
                <div class="row">
                    <div class="col text-right">
                        <a href="{{route('category_index_path', 'abarrotes')}}" class="font-weight-bold h5 d-block text-g-grey-dark">Frutas y verduras</a>
                        <a href="{{route('category_index_path', 'abarrotes')}}" class="font-weight-bold h5 d-block text-g-grey-dark">Carnes y aves</a>
                        <a href="{{route('category_index_path', 'abarrotes')}}" class="font-weight-bold h5 d-block text-g-grey-dark">Abarrotes</a>
                        <a href="{{route('category_index_path', 'abarrotes')}}" class="font-weight-bold h5 d-block text-g-grey-dark">Licores y vinos</a>

                        <hr>
                    </div>
                </div>
                <hr class="my-3">
                <div class="row justify-content-center">
                    <div class="col-8">
                        <div class="row">
                            <div class="col text-center">
                                <a href="#" target="_blank"><i class="fab fa-facebook fa-2x text-primary"></i></a>
                            </div>
                            {{--                            <div class="col">--}}
                            {{--                                <i class="fab fa-twitter fa-2x text-info"></i>--}}
                            {{--                            </div>--}}
                            <div class="col text-center">
                                <a href="#" target="_blank"><i class="fab fa-instagram fa-2x text-g-grey-light"></i></a>
                            </div>

                            <div class="col text-center">
                                <a href="#" target="_blank"><i class="fab fa-whatsapp fa-2x text-g-grey-light"></i></a>
                            </div>
                            {{--                            <div class="col">--}}
                            {{--                                <i class="fab fa-youtube fa-2x text-danger"></i>--}}
                            {{--                            </div>--}}
                        </div>
                    </div>
                </div>
{{--                <hr>--}}
{{--                <div class="row mt-4">--}}
{{--                    <div class="col text-center">--}}
{{--                        <a href="{{asset('doc/terms-and-conditions.pdf')}}" target="_blank" class="font-weight-normal h6 d-block text-g-grey-light">@lang('home.terminos')</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
</div>
