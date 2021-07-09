@extends('admin.layouts.app')

@section('content')
    <div class="page-content-wrapper ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-xl-4">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <h4 class="header-title mt-0">Checkboxes</h4>
                            <form class="mb-0">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Check me out
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="" checked>
                                        I'm selected because I seem like the safe choice
                                    </label>
                                </div>
                                <div class="checkbox disabled">
                                    <label>
                                        <input type="checkbox" value="" disabled>
                                        Option is disabled because it is scary
                                    </label>
                                </div>
                                <label class="checkbox-inline mr-2">
                                    <input type="checkbox" id="inlineCheckbox1" value="option1"> 1
                                </label>
                                <label class="checkbox-inline mr-2">
                                    <input type="checkbox" id="inlineCheckbox2" value="option2"> 2
                                </label>
                                <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" value="option3"> 3
                                </label>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
