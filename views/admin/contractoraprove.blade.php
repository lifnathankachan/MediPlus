<!doctype html>
<html class="no-js" lang="zxx">

            <!-- Breadcome End-->
            <!-- Mobile Menu start -->
                  <!-- Mobile Menu end -->
            <!-- Breadcome start-->
           
            <!-- accordion End-->
            <div class="col-lg-4">
                            <div class="sparkline9-list shadow-reset mg-tb-30">
                                <div class="sparkline9-hd">
                                    <div class="main-sparkline9-hd">
                                        <h1>Builders to Approve</h1>
                                        <div class="sparkline9-outline-icon">
                                            <span class="sparkline9-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span><i class="fa fa-wrench"></i></span>
                                            <span class="sparkline9-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline9-graph dashone-comment">
                                    <div class="datatable-dashv1-list custom-datatable-overright dashtwo-project-list-data">
                                        <div id="toolbar1">
                                            
                                        </div>
                                        <table id="table1" data-toggle="table" data-pagination="true" data-show-columns="true" data-cookie="true" data-page-size="10" data-page-list="[10, 20, 30, 40, 50]" data-cookie-id-table="saveId">
                                            <thead>
                                                <tr>
                                                    <th data-field="status" data-editable="true">conratcor name </th>
                                                    <th data-field="email" data-editable="true">Contractor_Imge </th>
                                                    <th data-field="phone" data-editable="true">Contractor_landmark&nbsp;&nbsp;</th>
                                                    <th data-field="company" data-editable="true">Category&nbsp;&nbsp;</th>
                                                    <th data-field="company" data-editable="true">uploaded Licence&nbsp;&nbsp;</th>
                                                    <th data-field="company" data-editable="true">Expiration Date&nbsp;&nbsp;</th>
                                                    <th data-field="company" data-editable="true">Status&nbsp;&nbsp;</th>
                                                    <th data-field="company" data-editable="true">Approve/Reject&nbsp;&nbsp;</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                @isset($st)
                                                @foreach($st as $approve)
                                                     <td>{{$approve->contractor_name}}{{$approve->contractor_name}}</td>
                                                     <td>{{$approve->contractor_image}}</td>
                                                     <td>{{$approve->contractor_landmark}}</td>

                                                    
                                                    <td>{{$approve->category}}</td>
                                                    <td>{{$approve->contractor_uploadlicence}}</td>
                                                    <td>{{$approve->Expiration_date}}</td>
                                                
        
                                                                   @if($approve->status == '1')        
                                                                     <td>Active</td>         
                                                                   @else
                                                                     <td>Blocked</td>        
                                                                   @endif
                                                     
                                                    
                                                                  <td><a href="{{url('Approve/'.$approve->id)}}">Change Status</a></td>
                                                                 </tr>
                                                 
                                                    <td></td>
                                                @endforeach
                                                @endisset
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        </div>
        </div>
    </div>
    <!-- Footer Start-->
    
</body>

</html>