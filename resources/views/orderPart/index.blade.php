@extends('layouts.app')
@section('title','Order Part ')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="text-align: center;">
                <h1>Call AGV For supply component part</h1>
            </div>
        </div>
        <div class="d-flex justify-content-between bd-highlight mb-2" style="padding-left:50px;padding-right:50px">
            <div class="p-2 bd-highlight"><img src="{{url('/images/icon_scan_barcode.png')}}" width="50px"></div>
            <div class="p-2 bd-highlight"><div style="border: 2px solid #6e7473;
                padding: 10px;
                border-radius: 10px; width:150px; text-align: center; background:#60fff5"><b>ASP-P03</b></div></div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <div style="border: 2px solid #6e7473;
                    padding: 10px;
                    border-radius: 3px; width:100%px; text-align: center; background:#60fff5">
                    <b>Direction sheet</b>
                </div>
            </div>
            <div class="col-md-7">
                <div style="border: 2px solid #6e7473;
                    padding: 10px;
                border-radius: 2px; color:red; text-align:center"><b>AP1012-2824-00</b>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5" style="padding-top:5px">
                <div style="border: 2px solid #6e7473;
                    padding: 10px;
                    border-radius: 3px; width:100%; text-align: center; background:#d6dfde;">
                    <b>Metal shell</b>
                </div>
                <div style="border: 2px solid #6e7473; border-radius: 3px; width:100%; text-align: center; background:#ffffff;
                    padding: 10px;
                    height:80px;">
                    <h1>Order</h1>
                </div>
                <div style="border: 2px solid #6e7473;
                    padding: 10px;
                    border-radius: 3px; width:100%; text-align: center; background:#ffffff; color:red">
                    <b>Urgent</b>
                </div>
            </div>
            <div class="col-md-7" style="padding-top:5px">
                <div style="border: 2px solid #6e7473; border-radius: 3px; width:100%; background:#ffffff;
                    padding: 10px;
                    height:102px;color:red">
                    <b>S-IZFR6K13/11</b>
                </div>
                <div style="border: 2px solid #6e7473;
                    padding: 10px;
                    border-radius: 3px; width:100%; text-align: center; background:#fff; color:#000;font-size:30px">
                    <b>2,640</b>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12"><hr/></div>
        </div>
        <div class="row">
            <div class="col-md-5" style="padding-top:5px">
                <div style="border: 2px solid #6e7473;
                    padding: 10px;
                    border-radius: 3px; width:100%; text-align: center; background:#d6dfde;">
                    <b>Insulator</b>
                </div>
                <div style="border: 2px solid #6e7473; border-radius: 3px; width:100%; text-align: center; background:#ffffff;
                    padding: 10px;
                    height:80px;">
                    <h1>Order</h1>
                </div>
                <div style="border: 2px solid #6e7473;
                    padding: 10px;
                    border-radius: 3px; width:100%; text-align: center; background:#ffffff; color:red">
                    <b data-toggle="modal" data-target=".bd-example-modal-lg">Urgent</b>
                </div>
            </div>
            <div class="col-md-7" style="padding-top:5px">
                <div style="border: 2px solid #6e7473; border-radius: 3px; width:100%; background:#ffffff;
                    padding: 10px;
                    height:102px;color:red">
                    <b>G.IZFR6K11/10</b><br/>
                    <b>G.IZFR6K11/12</b>
                </div>
                <div style="border: 2px solid #6e7473;
                    padding: 10px;
                    border-radius: 3px; width:100%; text-align: center; background:#fff; color:#000;font-size:30px">
                    <b>2,640</b>
                </div>
            </div>
        </div>
        <video id="preview"></video>
    </div>

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="container">
                <div class="d-flex justify-content-center"style="margin-bottom:10%;margin-top:10%;">
                    <h3>Call AGV For supply component part</h3>
                </div>
                <div class="d-flex justify-content-center">
                    <div style="border: 2px solid #6e7473;
                        padding: 10px;
                        border-radius: 3px; width:100%; text-align: center; background:rgb(235, 214, 124); color:red;font-size:20px">
                        <b>ต้องการเรียก Part Urgent ใช่หรือไม่</b>
                    </div>
                </div>
                <div class="row" style="margin-bottom:10%;margin-top:10%;">
                    <div class="col-md-6">
                        <button type="button" class="btn btn-success" style="width:100%" data-dismiss="modal">ใช่</button>
                    </div>
                    <div class="col-md-6">
                        <button type="button" class="btn btn-danger"  style="width:100%" data-dismiss="modal">ไม่</button>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
@endsection
@section('javascript')
<script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js" type="text/javascript"></script>
<script>
    setTimeout(() => {
        let scanner = new Instascan.Scanner({video: document.getElementById('preview')});
        Instascan.Camera.getCameras().then(function(cameras){
            if(cameras.length > 0){
                scanner.start(cameras[1])
            }else{
                alert("No cameras found")
            }
        }).catch(function(e){
            console.log(e)
        });
        scanner.addListener('scan', function(c){
            alert(c)
        })
    }, 2000);
</script>
@endsection