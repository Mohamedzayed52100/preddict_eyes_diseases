<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div  style="display:flex; justify-content:space-between;"class="p-6 bg-white border-b border-gray-200">

                    <div calss="flex">



                    @if ( !auth()->user()->image)
                    {{-- You're logged {{auth()->user()->name}} --}}

                    <form  method="post" action="/savephote" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{auth()->user()->id}}">
                        <div class="form-group">

                            <label for="title">Choose profil Image</label>
                            <input type="file"  name="file" class="form-control"  onchange="previewFile(this)">
                            <img id="previewImg" src="{{asset('images')}}/{{auth()->user()->image  }}" style="max-width: 130px;margin-top: 20px" alt="profil Image">
                            <input  class="btn btn-light" type="submit" value="Save">
                            {{-- <img id="previewImg" src="{{asset('images')}}/{{$student->profileimage   }}" style="max-width: 130px;margin-top: 20px" alt="profil Image"> --}}
                          </div>

                    </form>

                    @endif

                    <div>

                        <img src="{{asset('images')}}/{{auth()->user()->image  }}" style="max-width: 200px; border-radius:50%; margin: 10px 0 0 50px;  " alt="">

                    </div>
                    <div style="font-size: 20px">

                   {{-- <p> ID : {{auth()->user()->id}}</p> --}}

                   @php
                   session([
                    'userid'=>auth()->user()->id,

                   ]);
                   @endphp
                       <a  style="position:fixed; top:5px; left:135px; " href="/"><img  src="/images/logo.jpg" style="width:60px;height:60px;  left:60px; border-radius:50px;"  ></a>


                   <p  style="color:#718099;"   ><span style="font-weight:bold ;color:#38a3eb;">Name</span>  :  {{auth()->user()->name}}</p>
                   <p   style="color:#718099;" ><span style="font-weight:bold; color:#38a3eb;" >Email</span>  : {{auth()->user()->email}}</p>


                   <br>

                   <a  style="margin: 25px  0 0 10px; text-decoration: none; background:#38a3eb; color:#fff; padding : 5px 25px; border-radius: 20px; margin:25px; " class=" " href="/pinfoedit/{{auth()->user()->id}}">Edit</a>
                   <a  style="margin: 25px  0 0 10px; text-decoration: none; background:#38a3eb; color:#fff; padding : 5px 25px; border-radius: 20px; margin:25px;"   class="" href="/history/{{auth()->user()->id}}">History</a>
                  </div>

                </div>


            <div class="flex">
                <div>
                <img style="height:300px; border-radius:20%;" src="{{asset('images')}}/predict.jpg">
                <br>
                <br>

                <div>
                <a href="/showUpload" style="  margin: 25px  0 0 50px; position: relative; left:60px; text-decoration: none; background:#38a3eb; color:#fff; padding : 10px 25px; border-radius: 20px; margin:25px;">
                    check your eyes

                </a>
            </div>
            </div>

            </div>
        </div>

        </div>
        </div>
    </div>
    {{-- <h1>{{session('userid')}}</h1> --}}
</x-app-layout>
