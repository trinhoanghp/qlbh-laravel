@extends('layouts.admin')
@section('title', 'Thuộc tính')
@section('content')
    @include('admin.includes.content-header',['name' => 'Thuộc tính','key' =>'Form Thêm thuộc tính'])

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
      <div class="row">
         <div class="col-md-2">
              <form action="{{ route('attribute.store')}}" method="POST"> 
                @csrf
              <div class="form-group">
                <label for="">Thuộc tính</label>
                <select class="form-control" name="name" id="inputname">
                  <option value="color">Color</option>
                  <option value="size">Size</option>
                </select>
              </div>
                <div class="form-group value1">
                  <label >Giá trị  </label>
                  <input type="color" name="value" id="color" class="form-control">
                  @error('value') <span style="color:red">{{$message}}</span> @enderror
                </div>
                <div class="form-group value2" style="display:none">
                    <label >Giá trị </label>
                    <input type="text" name="" id="size" class="form-control" placeholder="Nhập size S, M, L, XL ... " >
                    @error('value') <span style="color:red">{{$message}}</span> @enderror
                  </div>
                <button type="submit" class="btn btn-primary" ><i class="fa fa-save " data-toggle="tooltip" data-placement="top" title="Lưu"></i> </button>
                <a href="{{ route('attribute.index')}}" class="btn btn-danger m-1" type="submit" data-toggle="tooltip" data-placement="top" title="Hủy"> <i class="fa fa-times"></i>  </a>
              </form>
            </div>
          </div>
        </div>
        </div>

      </div>
    </div>

<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script>
        $('#inputname').change(function(e) {
            var _name = $('#inputname').val();
            if( _name == 'size'){
                $('.value2').show();
                $('#size').attr({
                    name:'value'
                })
                $('.value1').hide();
                $('#color').attr({
                    name:''
                })
            }else{
                $('.value1').show();
                $('#color').attr({
                    name:'value'
                })
                $('.value2').hide();
                $('#size').attr({
                    name:''
                })
            }
        });
    </script>
@stop()
