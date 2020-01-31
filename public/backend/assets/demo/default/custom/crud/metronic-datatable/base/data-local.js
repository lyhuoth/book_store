var DatatableDataLocalDemo={init:function(){var e,a;e=JSON.parse(
    '[' +
    '{"RecordID":1,"OrderID":"54473-251","ShipCountry":"GT","ShipCity":"San Pedro Ayampuc","ShipName":"Sanford-Halvorson","ShipAddress":"897 Magdeline Park","CompanyEmail":"sgormally0@dot.gov","CompanyAgent":"Shandra Gormally","CompanyName":"Eichmann, Upton and Homenick","Currency":"GTQ","Notes":"sit amet cursus id turpis integer aliquet massa id lobortis convallis","Department":"Computers","Website":"house.gov","Latitude":"14.78667","Longitude":"-90.45111","ShipDate":"5/21/2016","TimeZone":"America/Guatemala","Status":1,"Type":2},' +

    '{"RecordID":2,"OrderID":"41250-308","ShipCountry":"ID","ShipCity":"Langensari","ShipName":"Denesik-Langosh","ShipAddress":"9 Brickson Park Junction","CompanyEmail":"eivanonko1@over-blog.com","CompanyAgent":"Estele Ivanonko","CompanyName":"Lowe, Batz and Purdy","Currency":"IDR","Notes":"lacinia aenean sit amet justo morbi ut odio cras mi pede malesuada in imperdiet","Department":"Baby","Website":"arizona.edu","Latitude":"-6.4222","Longitude":"105.9425","ShipDate":"4/19/2016","TimeZone":"Asia/Jakarta","Status":1,"Type":3},' +

    '{"RecordID":3,"OrderID":"0615-7571","ShipCountry":"HR","ShipCity":"Slatina","ShipName":"Kunze, Schneider and Cronin","ShipAddress":"35712 Sundown Parkway","CompanyEmail":"sbettley2@gmpg.org","CompanyAgent":"Stephine Bettley","CompanyName":"Bernier, Weimann and Wuckert","Currency":"HRK","Notes":"cras in purus eu magna vulputate luctus cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus vivamus","Department":"Toys","Website":"rakuten.co.jp","Latitude":"45.70333","Longitude":"17.70278","ShipDate":"4/7/2016","TimeZone":"Europe/Zagreb","Status":6,"Type":3}' +
    ']'),
    a=$(".m_datatable").mDatatable({data:{type:"local",source:e,pageSize:10},layout:{theme:"default",class:"",scroll:!1,footer:!1},sortable:!0,pagination:!0,search:{input:$("#generalSearch")},columns:[{field:"RecordID",title:"#",width:50,sortable:!1,textAlign:"center",selector:{class:"m-checkbox--solid m-checkbox--brand"}},{field:"OrderID",title:"Order ID"},{field:"ShipName",title:"Ship Name",responsive:{visible:"lg"}},{field:"Currency",title:"Currency",width:100},{field:"ShipAddress",title:"Ship Address",responsive:{visible:"lg"}},{field:"ShipDate",title:"Ship Date",type:"date",format:"MM/DD/YYYY"},{field:"Latitude",title:"Latitude",type:"number"},{field:"Status",title:"Status",template:function(e){var a={1:{title:"Pending",class:"m-badge--brand"},2:{title:"Delivered",class:" m-badge--metal"},3:{title:"Canceled",class:" m-badge--primary"},4:{title:"Success",class:" m-badge--success"},5:{title:"Info",class:" m-badge--info"},6:{title:"Danger",class:" m-badge--danger"},7:{title:"Warning",class:" m-badge--warning"}};return'<span class="m-badge '+a[e.Status].class+' m-badge--wide">'+a[e.Status].title+"</span>"}},{field:"Type",title:"Type",template:function(e){var a={1:{title:"Online",state:"danger"},2:{title:"Retail",state:"primary"},3:{title:"Direct",state:"accent"}};return'<span class="m-badge m-badge--'+a[e.Type].state+' m-badge--dot"></span>&nbsp;<span class="m--font-bold m--font-'+a[e.Type].state+'">'+a[e.Type].title+"</span>"}},{field:"Actions",width:110,title:"Actions",sortable:!1,overflow:"visible",template:function(e,a,i){return'\t\t\t\t\t\t<div class="dropdown '+(i.getPageSize()-a<=4?"dropup":"")+'">\t\t\t\t\t\t\t<a href="#" class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown">                                <i class="la la-ellipsis-h"></i>                            </a>\t\t\t\t\t\t  \t<div class="dropdown-menu dropdown-menu-right">\t\t\t\t\t\t    \t<a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>\t\t\t\t\t\t    \t<a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>\t\t\t\t\t\t    \t<a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>\t\t\t\t\t\t  \t</div>\t\t\t\t\t\t</div>\t\t\t\t\t\t<a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="View ">                            <i class="la la-edit"></i>                        </a>\t\t\t\t\t'}}]}),$("#m_form_status").on("change",function(){a.search($(this).val(),"Status")}),$("#m_form_type").on("change",function(){a.search($(this).val(),"Type")}),$("#m_form_status, #m_form_type").selectpicker()}};jQuery(document).ready(function(){DatatableDataLocalDemo.init()});