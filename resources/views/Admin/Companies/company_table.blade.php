<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        sitter requests DataTable
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>icon</th>
                    <th>Company Name</th>
                    <th>CommercialRegisterN</th>
                    <th>webSite</th>
                    <th>Numero Employe</th>
                    <th>check request demande</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>icon</th>
                    <th>Company Name</th>
                    <th>CommercialRegisterN</th>
                    <th>webSite</th>
                    <th>Numero Employe</th>
                    <th>check request demande</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach($companies as $company)
                <tr>
                    <td>        
                        <div class="ratio ratio-1x1 rounded-circle overflow-hidden">
                            <img src="Companyimage/{{$company->icon}}" class="card-img-top img-cover" alt="Raeesh" height="30" width="30">
                        </div>
                    </td>
                    <td>{{$company->name}}</td>
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