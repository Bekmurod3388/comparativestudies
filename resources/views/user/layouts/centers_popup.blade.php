@foreach ($centersByType as $type => $typeCenters)
    <div class="modal fade" id="{{ $type == '2' ? 'LeftModalCenter' : 'RightModalCenter' }}" tabindex="-1" role="dialog" aria-labelledby="LeftModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered {{ $type == '2' ? 'ml-5' : 'mr-5' }}" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="exampleModalLongTitle">{{ $type == '2' ? 'G`arb' : 'Sharq' }} adabiyotlari</h6>
                    <button type="button" class="close m-1" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div style="height: 45vh; overflow-y: scroll;">
                        @foreach ($typeCenters->groupBy('country') as $countryCenters)
                            <p style="text-align: center;">
                                <strong class="notranslate">
                                    {{ isset($countries['en'][$countryCenters[0]->country]) ? $countries['en'][$countryCenters[0]->country] : $countryCenters[0]->country}}
                                </strong>
                            </p>
                            <table class="table">
                                <tbody>
                                    @foreach ($countryCenters as $country)
                                        <tr class="row m-1">
                                                <td class="col-9 ">{{ $country->name }}</td>
                                                <td class="col-3"><a href="{{ $country->url }}" class="btn btn-primary btn-sm rounded">O'tish</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
