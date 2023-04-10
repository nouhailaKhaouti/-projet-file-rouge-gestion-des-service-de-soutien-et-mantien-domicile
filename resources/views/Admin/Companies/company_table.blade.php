<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        sitter requests DataTable
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>Company Name</th>
                    <th>icon</th>
                    <th>CommercialRegisterN</th>
                    <th>webSite</th>
                    <th>Numero Employe</th>
                    <th>check request demande</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Company Name</th>
                    <th>icon</th>
                    <th>CommercialRegisterN</th>
                    <th>webSite</th>
                    <th>Numero Employe</th>
                    <th>check request demande</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach($companys as $company)
                <tr>
                    <td>{{$company->name}}</td>
                    <td>{{$company->icon}}</td>
                    <td>{{$company->commercialRegisterN}}</td>
                    <td>{{$company->webSite}}</td>
                    <td>{{$company->nemploi}}</td>
                    <td>
                        @if($company->status=='InProgress')
                        <a class="btn btn-sm  btn-outline-success" href="{{url('approved_company',$company->id)}}">Approve</a>
                        <a class="btn btn-sm  btn-outline-danger" onclick="return confirm('are you sure ,you want to refuse this request ')" href="{{url('refused_company',$company->id)}}">refuse</a>
                        @else
                        <strong>{{$company->status}}</strong>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>