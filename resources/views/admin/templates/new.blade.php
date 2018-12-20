@extends('layouts.admin.master')

@push('css')
    <style>
        .hover_icon {
            cursor: pointer;
        }
    </style>
@endpush

@section('content')
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item active">
            <a href="{{route('home')}}">Home</a>
        </li>
    </ol>
    <div class="row">
        <div class="col-12">
            <h1>New Template</h1>
            <form action="">
                <div class="form-group">
                    <label for="tru33Title">Auction Title</label>
                    <input name="tru33Title" type="text" class="form-control" id="tru33Title" placeholder="Title" value="Auction Title Will Go Here">
                </div>
                <div class="form-group">
                    <label for="tru33ShortDescriptionHeader">Short Description Header (*optional)</label>
                    <input name="tru33ShortDescriptionHeader" value="" type="text" class="form-control" id="tru33ShortDescriptionHeader" placeholder="Subtitle">
                </div>


                <div class="form-group">
                    <label for="tru33ShortDescriptionText">Short Description text (*optional)</label>
                    <textarea name="tru33ShortDescriptionText" id="tru33ShortDescriptionText" class="form-control mceEditor" rows="3"><p>A nice responsive template with gallery and terms. A nice responsive template with gallery and terms.  A nice responsive template with gallery and terms.  A nice responsive template with gallery and terms.  A nice responsive template with gallery and terms.  A nice responsive template with gallery and terms.  A nice responsive template with gallery and terms.  A nice responsive template with gallery and terms.  A nice responsive template with gallery and terms.  A nice responsive template with gallery and terms.</p><p>A nice responsive template with gallery and terms. A nice responsive template with gallery and terms.  A nice responsive template with gallery and terms.  A nice responsive template with gallery and terms.  A nice responsive template with gallery and terms.  A nice responsive template with gallery and terms.  A nice responsive template with gallery and terms.  A nice responsive template with gallery and terms.  A nice responsive template with gallery and terms.  A nice responsive template with gallery and terms.</p></textarea>
                </div>

                <div class="form-group">
                    <label for="tru33LongDescriptionHeader">Long Description Header (*optional)</label>
                    <input name="tru33LongDescriptionHeader" value="" type="text" class="form-control" id="tru33LongDescriptionHeader" placeholder="Subtitle">
                </div>


                <div class="form-group">
                    <label for="tru33LongDescriptionText">Short Description text (*optional)</label>
                    <textarea name="tru33LongDescriptionText" id="tru33LongDescriptionText" class="form-control mceEditor" rows="3"><p>A nice responsive template with gallery and terms. A nice responsive template with gallery and terms.  A nice responsive template with gallery and terms.  A nice responsive template with gallery and terms.  A nice responsive template with gallery and terms.  A nice responsive template with gallery and terms.  A nice responsive template with gallery and terms.  A nice responsive template with gallery and terms.  A nice responsive template with gallery and terms.  A nice responsive template with gallery and terms.</p><p>A nice responsive template with gallery and terms. A nice responsive template with gallery and terms.  A nice responsive template with gallery and terms.  A nice responsive template with gallery and terms.  A nice responsive template with gallery and terms.  A nice responsive template with gallery and terms.  A nice responsive template with gallery and terms.  A nice responsive template with gallery and terms.  A nice responsive template with gallery and terms.  A nice responsive template with gallery and terms.</p></textarea>
                </div>

                <fieldset id="images">
                    <legend class="well well-sm">Images: (*optional)</legend>

                    <div class="form-group">
                        <label for="tru33MainImage">Long Description Header (*optional)</label>
                        <input name="tru33MainImage" value="" type="text" class="form-control" id="tru33MainImage" placeholder="Subtitle">
                    </div>


                </fieldset>



                <div class="form-group">
                    <label for="exampleFormControlSelect2">Example multiple select</label>
                    <fieldset id="productTable">
                        <legend class="well well-sm">Data Table: (*optional) <i id="dataTblBtn" class="fas fa-plus-circle hover_icon"></i><br>
                            <small>Add up to 10 item/value pairs</small></legend>
                        <table id="DataTableTable" class="table">
                            <tr>
                                <td colspan="2">
                                    <label for="tru33DataTableHdr">Table Legend (*optional)</label>
                                    <input class="form-control" name="tru33DataTableHdr" type="text" id="tru33DataTableHdr" value="">
                                </td>

                            </tr>

                            <tr>
                                <td><strong>Data Label</strong></td>
                                <td><strong>Data Value</strong></td>
                            </tr>

                            <tr>
                                <td class="dataLabel"><input type="text" class="form-control" name="label1" id="label1" placeholder="e.g. Weight"></td>
                                <td><input type="text" class="form-control" name="value1" id="value1" placeholder="e.g. 20lbs."></td>
                            </tr>

                            <tr>
                                <td><input type="text" class="form-control" name="label2" id="label2"></td>
                                <td><input type="text" class="form-control" name="value2" id="value2"></td>
                            </tr>

                            <tr>
                                <td><input type="text" class="form-control" name="label3" id="label3"></td>
                                <td><input type="text" class="form-control" name="value3" id="value3"></td>
                            </tr>

                            <tr>
                                <td><input type="text" class="form-control" name="label4" id="label4"></td>
                                <td><input type="text" class="form-control" name="value4" id="value4"></td>
                            </tr>

                            <tr>
                                <td><input type="text" class="form-control" name="label5" id="label5"></td>
                                <td><input type="text" class="form-control" name="value5" id="value5"></td>
                            </tr>

                            <tr>
                                <td><input type="text" class="form-control" name="label6" id="label6"></td>
                                <td><input type="text" class="form-control" name="value6" id="value6"></td>
                            </tr>

                            <tr>
                                <td><input type="text" class="form-control" name="label7" id="label7"></td>
                                <td><input type="text" class="form-control" name="value7" id="value7"></td>
                            </tr>

                            <tr>
                                <td><input type="text" class="form-control" name="label8" id="label8"></td>
                                <td><input type="text" class="form-control" name="value8" id="value8"></td>
                            </tr>

                            <tr>
                                <td><input type="text" class="form-control" name="label9" id="label9"></td>
                                <td><input type="text" class="form-control" name="value9" id="value9"></td>
                            </tr>

                            <tr>
                                <td><input type="text" class="form-control" name="label10" id="label10"></td>
                                <td><input type="text" class="form-control" name="value10" id="value10"></td>
                            </tr>
                        </table>
                    </fieldset>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Example textarea</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </form>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            $('#DataTableTable').hide();
            $( "#dataTblBtn" ).click(function() {
                $('#DataTableTable').show();
            });
            // page is now ready, initialize the calendar...

        });
    </script>
@endpush