@extends('layouts.app')

@section('estilos')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css" integrity="sha512-CWdvnJD7uGtuypLLe5rLU3eUAkbzBR3Bm1SFPEaRfvXXI2v2H5Y0057EMTzNuGGRIznt8+128QIDQ8RqmHbAdg==" crossorigin="anonymous" />
@endsection

@section('botonesRecetas')
    <a href="{{route('recetas.index')}}" class="btn">
        <svg class="icono" className="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z" /></svg>
        Atrás
    </a>
@endsection

@section('content')
 
<div class="container shadow" style="padding: 5px;">
    <h3 class="w3-large" style="font-size: 22px; text-align: center; margin-right: 5px;  ">
        <img style="width: 50px" src="data:image/svg+xml;base64,PHN2ZyBpZD0iTGF5ZXJfMSIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAwIDAgNDgwLjA2MyA0ODAuMDYzIiBoZWlnaHQ9IjUxMiIgdmlld0JveD0iMCAwIDQ4MC4wNjMgNDgwLjA2MyIgd2lkdGg9IjUxMiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJtMzk0LjAzMiA0MjQuODAzdjM5LjI2YzAgNC40Mi0zLjU4IDgtOCA4aC0yOTJjLTQuNDIgMC04LTMuNTgtOC04di0zOS4yNmMwLTQxLjE5IDMzLjM5LTc0LjU2IDc0LjU5LTc0LjU3IDE0LjU2LS4wMSAyNy4zOC03LjUgMzQuNzYtMTguODYgNy40MTQtMTEuMzk0IDYuNjUtMjEuMzAyIDYuNjUtMjkuMzFsLjE1LS4zN2MtMzUuOS0xNC44Ni02MS4xNS01MC4yMy02MS4xNS05MS41di0zLjEzYy0xNC4yNTUgMC0yNS0xMS4yNjUtMjUtMjQuNTR2LTQxLjU2Yy0uMzItMTQuNDcuMzQtNjUuNSAzNy4yLTEwMS4wMyA0Mi44Ni00MS4zMSAxMTAuNzgtMzcuOTMgMTU5Ljk4LTE1LjgzIDEuNi43MiAxLjU1IDMuMDEtLjA3IDMuNjhsLTEyLjgzIDUuMjhjLTEuOTIuNzktMS41MSAzLjYyLjU1IDMuODRsNi4yMy42N2MyOS44MyAzLjE5IDU3LjU0IDE5LjM5IDc0LjcyIDQ2LjM1LjQ2LjczLjMzIDEuODQtLjI2IDIuNDctMTAuNiAxMS4yMS0xNi41MiAyNi4wOS0xNi41MiA0MS41NnY1NC41N2MwIDEzLjU1LTEwLjk5IDI0LjU0LTI0LjU0IDI0LjU0aC0xLjQ2djMuMTNjMCA0MS4yNy0yNS4yNSA3Ni42NC02MS4xNSA5MS41bC4xNS4zN2MwIDcuNzc3LS44MjcgMTcuODIgNi42NSAyOS4zMSA3LjM4IDExLjM2IDIwLjIgMTguODUgMzQuNzYgMTguODYgNDEuMi4wMSA3NC41OSAzMy4zOCA3NC41OSA3NC41N3oiIGZpbGw9IiNmZmRmYmEiLz48cGF0aCBkPSJtMzk0LjAzMiA0MjQuODAzdjM5LjI2YzAgNC40MTgtMy41ODIgOC04IDhoLTI5MmMtNC40MTggMC04LTMuNTgyLTgtOHYtMzkuMjZjMC00MS4xOSAzMy4zOTUtNzQuNTU1IDc0LjU4NS03NC41NyAxNC41NjQtLjAwNSAyNy4zODctNy41MDQgMzQuNzY1LTE4Ljg2IDI1Ljc1NCAyMi4wMDIgNjMuNTMxIDIyLjAxNSA4OS4zIDAgNy4zNzcgMTEuMzU2IDIwLjIwMSAxOC44NTUgMzQuNzY1IDE4Ljg2IDQxLjE5LjAxNSA3NC41ODUgMzMuMzggNzQuNTg1IDc0LjU3eiIgZmlsbD0iI2ZlNGY2MCIvPjxwYXRoIGQ9Im0zODEuODA3IDgzLjkyOGMuNDY0LjcyOS4zMzQgMS44MzMtLjI1OSAyLjQ2MS0xMC41OTcgMTEuMjE4LTE2LjUxNyAyNi4wOTMtMTYuNTE3IDQxLjU2NHY1NC41N2MwIDEyLjM4OC05LjMzMyAyNC41NC0yNiAyNC41NHYtNjEuNzdjMC0yNi41MS0yMS40OS00OC00OC00OGgtMTAyYy0yNi41MSAwLTQ4IDIxLjQ5LTQ4IDQ4djYxLjc3Yy0xNC4yNTUgMC0yNS0xMS4yNjUtMjUtMjQuNTR2LTQxLjU2Yy0uMzItMTQuNDcuMzQtNjUuNSAzNy4yLTEwMS4wMyA0Mi44NTgtNDEuMzExIDExMC43ODQtMzcuOTI5IDE1OS45NzctMTUuODI3IDEuNjAxLjcxOSAxLjU1OCAzLjAxLS4wNjUgMy42NzhsLTEyLjgzMSA1LjI4MmMtMS45MTguNzktMS41MTQgMy42MTcuNTQ4IDMuODM4bDYuMjMyLjY2OWMyOS44MzQgMy4xODcgNTcuNTM3IDE5LjM4NyA3NC43MTUgNDYuMzU1eiIgZmlsbD0iIzQyNDM0ZCIvPjxwYXRoIGQ9Im0zMzkuMDMyIDIxMC4xOTNjMCA1NC42OTYtNDQuMzQ4IDk5LTk5IDk5LTUxLjQ5MiAwLTk5LTQwLjAzMS05OS0xMDIuMTN2LTYxLjc3YzAtMjYuNTEgMjEuNDktNDggNDgtNDhoMTAyYzI2LjUxIDAgNDggMjEuNDkgNDggNDh6IiBmaWxsPSIjZmZlYmQyIi8+PHBhdGggZD0ibTIxNy42MTYgMjc0LjEyMWMxNi4yNzcgMTAuMTgzIDMuNDQyIDM1LjE1Ni0xNC4zNzYgMjguMDA0LTM2LjYzNC0xNC43MDQtNjIuMjA4LTUwLjQwNC02Mi4yMDgtOTEuOTMydi02NC45YzAtMTAuMDg0IDMuMTEtMTkuNDQyIDguNDIzLTI3LjE2OCA2LjUxNC05LjQ3MyAyMS41NzctNS4yODggMjEuNTc3IDcuMTY4djY0LjljMCAzNi41MSAxOS4xOTIgNjYuNzkgNDYuNTg0IDgzLjkyOHoiIGZpbGw9IiNmZmYzZTQiLz48cGF0aCBkPSJtMjc5LjE2MiAzMTguNDgzYy0yNC42MzcgMTAuMzEzLTUxLjcxMiAxMS4xMTMtNzguMjYgMCAxLjM1Ni01LjYyNiAxLjEzLTkuMjcgMS4xMy0xNi40MmwuMTUtLjM3YzI0LjA4MiA5Ljk5NiA1MS41NzEgMTAuMDE2IDc1LjcgMGwuMTUuMzdjMCA3LjE1My0uMjI2IDEwLjc5NiAxLjEzIDE2LjQyeiIgZmlsbD0iI2ZmZDZhNiIvPjxwYXRoIGQ9Im0yMDAuOTEzIDM3NC4zOWMtMy42OTggMS4xNjMtNy42NjQgMS44MDQtMTEuOTE2IDEuODQxLTQxLjI5Ni4zNjQtNzQuOTY2IDMzLjAxNy03NC45NjYgNzQuMzE1djcuNTE3YzAgNy43MzItNi4yNjggMTQtMTQgMTRoLTZjLTQuNDE4IDAtOC0zLjU4Mi04LTh2LTM5LjI2YzAtNDEuMTkxIDMzLjM5NS03NC41NTUgNzQuNTg1LTc0LjU3IDE0LjU2NC0uMDA1IDI3LjM4Ny03LjUwNCAzNC43NjUtMTguODYgMi45NzQgMi41NCA2LjE1OCA0LjgyMyA5LjUxMiA2LjgyMiAxNC43NTMgOC43OTEgMTIuNDAyIDMxLjA0NC0zLjk4IDM2LjE5NXoiIGZpbGw9IiNmZjZkN2EiLz48cGF0aCBkPSJtMjc5LjE1IDM3NC4zOWMzLjY5OCAxLjE2MyA3LjY2NCAxLjgwNCAxMS45MTYgMS44NDEgNDEuMjk2LjM2NCA3NC45NjYgMzMuMDE3IDc0Ljk2NiA3NC4zMTV2Ny41MTdjMCA3LjczMiA2LjI2OCAxNCAxNCAxNGg2YzQuNDE4IDAgOC0zLjU4MiA4LTh2LTM5LjI2YzAtNDEuMTkxLTMzLjM5NS03NC41NTUtNzQuNTg1LTc0LjU3LTE0LjU2NC0uMDA1LTI3LjM4Ny03LjUwNC0zNC43NjUtMTguODYtMi45NzQgMi41NC02LjE1OCA0LjgyMy05LjUxMiA2LjgyMi0xNC43NTMgOC43OTEtMTIuNDAyIDMxLjA0NCAzLjk4IDM2LjE5NXoiIGZpbGw9IiNlODQ4NTciLz48cGF0aCBkPSJtMzEzLjE0MiAyNy43ODNjLTExLjc1OCA0LjgzOS0xMy40MzQgNS45MDYtMTcuNTA4IDUuMjc0LTY1LjY3NC0xMC4xOC0xMjMuMjk0IDE2Ljk5My0xNDIuODYyIDgwLjc4NnYuMDFjLTcuMzIgOC40Mi0xMS43NCAxOS40Mi0xMS43NCAzMS40NHYzNy41MjNjMCAxNi4xODgtMjUgMTcuMzE1LTI1LS4yOTN2LTQxLjU2Yy0uMzItMTQuNDcuMzQtNjUuNSAzNy4yLTEwMS4wMyA0Mi44Ni00MS4zMSAxMTAuNzgtMzcuOTMgMTU5Ljk4LTE1LjgzIDEuNi43MiAxLjU1IDMuMDEtLjA3IDMuNjh6IiBmaWxsPSIjNGQ0ZTU5Ii8+PHBhdGggZD0ibTQwMi4wMzIgNDI0LjgwNnY0Ny4yNTdjMCA0LjQxOC0zLjU4MiA4LTggOHMtOC0zLjU4Mi04LTh2LTQ3LjI1N2MwLTM2Ljc5NS0yOS43NzUtNjYuNTcyLTY2LjU3My02Ni41NzEtMTcuNDExIDAtMzMuMjA4LTguODctNDIuMjU5LTIzLjcyOC0yLjI5OC0zLjc3My0xLjEwMy04LjY5NiAyLjY3MS0xMC45OTQgMy43NzMtMi4yOTkgOC42OTUtMS4xMDMgMTAuOTk0IDIuNjcxIDYuMTIyIDEwLjA1MSAxNi44MTEgMTYuMDUxIDI4LjU5NCAxNi4wNTEgNDUuNjM3LS4wMDIgODIuNTczIDM2LjkzIDgyLjU3MyA4Mi41NzF6bS0xMzkuNjA2LTgwLjE5M2MuOTQxIDQuMzE3LTEuNzk2IDguNTc5LTYuMTEzIDkuNTItMjEuMDU0IDQuNTg3LTQyLjQ2Ny0uMDA1LTU5LjUxNi0xMS42NDItMTYuODc4IDE4LjA4Ny0zOS4xNzYgMTUuNzQ0LTM2LjE5MSAxNS43NDQtMzYuNzk1LS4wMDEtNjYuNTczIDI5Ljc3My02Ni41NzMgNjYuNTcxdjQ3LjI1N2MwIDQuNDE4LTMuNTgyIDgtOCA4cy04LTMuNTgyLTgtOHYtNDcuMjU3YzAtNDUuNjM2IDM2LjkyOS04Mi41NzEgODIuNTcxLTgyLjU3MSAxOC40NjIgMCAzMy40MjktMTQuODc1IDMzLjQyOS0zMy4zNDJ2LTIuMTA3Yy0zNC45MTktMTYuNjk3LTU5LjQyOS01MS43ODQtNjAuOTIzLTkyLjY0My0xNC4zNy0zLjQ1NS0yNS4wNzctMTYuMzE3LTI1LjA3Ny0zMS42MnYtNDEuNDczYy0uNDM3LTIwLjMgMi41NzctNzEuMTQzIDM5LjY0OC0xMDYuODc3IDQ1Ljc3NS00NC4xMjYgMTE5LjE4My00MS4zMjMgMTczLjE2MS0xNS4zMzggNS4yNjEgMi41MzUgNi4wNiA5LjY0MyAxLjY5MSAxMy4zMjQgMjcuMzQ1IDYuNjcgNTAuOTI1IDIzLjQ4IDY2LjA3NCA0Ny41MzguNzgyIDEuMjM5IDIuMjE0IDMuMTg0IDEuODQgNi4yODctLjIzMiAxLjkzMS0uODA3IDMuNTY1LTIuMjk1IDUuMDc1LTkuNzUgOS44ODgtMTUuMTE5IDIyLjk5MS0xNS4xMTkgMzYuODk2djU0LjU3YzAgNC40MTgtMy41ODIgOC04IDhzLTgtMy41ODItOC04di01NC41N2MwLTE2LjAzNyA1LjQ3OS0zMS4yNTkgMTUuNTQyLTQzLjQ4Ny0xNS4zMzgtMjEuOTM2LTM5LjI2OC0zNi4wNDQtNjYuMzMyLTM4Ljk0MmwtMTQuMDYxLTEuNTA2Yy04LjIyMi0uODgtOS44MzUtMTIuMjA3LTIuMTk0LTE1LjM1Mmw2LjM5NS0yLjYzM2MtODMuMjg2LTI5LjAzNS0xNzIuMzUxIDMuMjI2LTE3Mi4zNTEgMTE0LjkyOHY0MS41NmMwIDYuMzQ4IDMuNjU2IDExLjg2NSA5IDE0LjYzNnYtNTEuODYzYzAtMzAuODc4IDI1LjEyMi01NiA1Ni01NmgxMDJjMzAuODc4IDAgNTYgMjUuMTIgNTYgNTUuOTk3djY1LjUwM2MwIDY5LjU3NC02Ny45ODggMTIyLjQyLTEzNy4xNyAxMDIuMDUzLS40NSA1LjcwOC0xLjg3MSAxMS4yMTYtNC4xODYgMTYuMzM2IDEzLjQ1OCA5LjI0MiAzMC40NTMgMTIuOTcgNDcuMjMgOS4zMTQgNC4zMTctLjk0IDguNTc5IDEuNzk3IDkuNTIgNi4xMTR6bS0yMi4zOTQtNDMuNDI1YzUwLjE3OCAwIDkxLTQwLjgyMiA5MS05MXYtNjQuODk1YzAtMjIuMDU0LTE3Ljk0NC0zOS45OTctNDAtMzkuOTk3aC0xMDJjLTIyLjA1NiAwLTQwIDE3Ljk0NC00MCA0MHY2NC44OTJjMCA1MC4xNzggNDAuODIyIDkxIDkxIDkxem04MSAxMzcuODc1aC0yNGMtNC40MTggMC04IDMuNTgyLTggOHMzLjU4MiA4IDggOGgyNGM0LjQxOCAwIDgtMy41ODIgOC04cy0zLjU4Mi04LTgtOHoiLz48L3N2Zz4=" />  
        Para conocerte un poco más {{$usuario->name}} necesitamos que rellenes el siguiente formulario...</h3>
</div>


<div class="container shadow  mb-5 ">
    <form  method="POST" action="{{route('adminUser.update',['usuario' =>$usuario->id])}}" enctype="multipart/form-data" novalidate>
        @csrf
        @method('PUT')
        <div class="form-group ml-3 mb-5 mr-3 mt-3">
            <label for="imagen" class="mt-4">Añada una fotografia a tu perfil</label>
            <input type="file" name="imagen" class="form-control @error('imagen') is-invalid @enderror" id="imagen" >
            @error('imagen')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{$message}}</strong>
                </span>               
            @enderror
        </div>
            
        <div class="form-group ml-3 mr-3 mt-3">
            <label for="interes">Datos de interes</label>
            <input id="interes" type="hidden"  name="interes" value="">
            <trix-editor input="interes" class="form-control @error('interes') is-invalid @enderror" placeholder="Añade datos de interes a tu perfil"></trix-editor>
            @error('interes')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{$message}}</strong>
                </span>               
            @enderror
        </div>

        <h3 class="mt-5 mb-5" style="text-align: center;" >Antes de finalizar, debes de elegir el tipo de plan con el que deseas trabajar</h3>
        <table class=" mt-5 table table-hover table-responsive-sm ">
            <thead class="thead-dark">
                <tr >
                    <td class="card-title mt-4 text-center text-uppercase font-weight-bold">{{$planes[0]->nombre}}</td>
                    <td class="card-title mt-4 text-center text-uppercase font-weight-bold">{{$planes[1]->nombre}}</td>
                    <td class="card-title mt-4 text-center text-uppercase font-weight-bold">{{$planes[2]->nombre}}</td>
                </tr>
            </thead>
            <tbody>
                <tr >
                    <td><img class="card-img-top rounded-lg ml-1" style="width: 300px;" src="/storage/{{$planes[0]->imagen}}" alt="imagen"></td>
                    <td><img class="card-img-top rounded-lg ml-5" style="width: 300px;" src="/storage/{{$planes[1]->imagen}}" alt="imagen"></td>
                    <td><img class="card-img-top rounded-lg ml-1" style="width: 300px;" src="/storage/{{$planes[2]->imagen}}" alt="imagen"></td>
                </tr>
                <tr>
                    <td>  {{(strip_tags($planes[0]->descripcion))}}</td>
                    <td>  {{(strip_tags($planes[1]->descripcion))}}</td>
                    <td>  {{(strip_tags($planes[2]->descripcion))}}</td>
                </tr>
                <tr>
                    <td class="text-center font-weight-bold mb-4">{{$planes[0]->precio}}</td>
                    <td class="text-center font-weight-bold mb-4">{{$planes[1]->precio}}</td>
                    <td class="text-center font-weight-bold mb-4">{{$planes[2]->precio}}</td>
                </tr>
                <tr>
                    <td class="btn btn-secondary justify-content-center w-100 text-white">
                        <input id="plan" type="radio" class=" @error('plan') is-invalid @enderror" name="plan" value="Entrenamiento" required autocomplete="plan"> Seleccionar plan de entrenamiento
                    </td>
                    <td class="ml-1 mr-1 btn-secondary justify-content-center  text-white" >
                        <input id="plan" type="radio" class=" @error('plan') is-invalid @enderror" name="plan" value="Completo" required autocomplete="plan"> Seleccionar plan completo
                    </td>
                    <td class="btn btn-secondary justify-content-center w-100 text-white">
                        <input id="plan" type="radio" class=" @error('plan') is-invalid @enderror" name="plan" value="Nutricion" required autocomplete="plan">Seleccionar plan de nutrici&oacute;n
                    </td>
                </tr>
        
            </tbody>
        </table>








        <div class="form-group mb-5" style="margin-bottom: 40px; ">
            <!-- Button to Open the Modal -->
            <button type="button"  class="btn btn-success mb-4 mt-4" data-toggle="modal" data-target="#myModal">
               Siguiente paso
            </button>

            <!-- The Modal -->
            <div class="modal" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">
    
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Perfil completado correctamente</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
    
                        <!-- Modal body -->
                        <div class="modal-body">
                            <p>{{$usuario->name}} tu perfil como {{$usuario->tipoUser}} se ha registrado correctamente</p>
                        </div>
    
                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-secondary text-uppercase text-black font-weight-bold " value="Cerrar">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>  
</div>




@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js" integrity="sha512-/1nVu72YEESEbcmhE/EvjH/RxTg62EKvYWLG3NdeZibTCuEtW5M4z3aypcvsoZw03FAopi94y04GhuqRU9p+CQ==" crossorigin="anonymous" defer></script>
@endsection


@endsection