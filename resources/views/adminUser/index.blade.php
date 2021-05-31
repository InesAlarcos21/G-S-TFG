@extends('layouts.app')

@section('estilos')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css" integrity="sha512-CWdvnJD7uGtuypLLe5rLU3eUAkbzBR3Bm1SFPEaRfvXXI2v2H5Y0057EMTzNuGGRIznt8+128QIDQ8RqmHbAdg==" crossorigin="anonymous" />
@endsection

@section('botonesRecetas')
    <a href="{{route('recetas.index')}}" class="btn btn-outline-primary mr-2 text-uppercase font-weight-bold">
        <svg class="icono" className="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z" /></svg>
        Atrás
    </a>
@endsection

@section('content')
<div class="container shadow ">
    {{$usuario}}
    <h2 class="text-center font-weight-bold mb-3">Completa tu perfil</h2>
    <p>¿Eres un experto licenciado en...?</p>
    
    <ul class="w3-ul w3-card ml-5 mr-5 shadow list-group-horizontal list-group">
        <li class="w3-bar list-group-item" style="list-style: none">
            <div class="w3-bar-item">
                <img  class="w3-bar-item w3-circle w3-hide-small"  style="width:60px" src="data:image/svg+xml;base64,PHN2ZyBpZD0iQ2FwYV8xIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCA1MTIuMDIxIDUxMi4wMjEiIGhlaWdodD0iNTEyIiB2aWV3Qm94PSIwIDAgNTEyLjAyMSA1MTIuMDIxIiB3aWR0aD0iNTEyIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxnPjxwYXRoIGQ9Im00OTcuNSAzNjkuMDE4LTEwNi4yMDItMTUwLjQzYy05LjM0Mi0xMy4yMzItMTQuOTM0LTI4LjY1NC0xNi44OC00NC43MzQtMi41NTctMjEuMTI0LTEzLjAyMi00My4wMjktMzAuODY5LTYwLjg3Ny0zNi4yODYtMzYuMjg2LTkyLjM0Ni00MC4wNTktMTIxLjUxMS0xMC44OTQtMjkuMTY2IDI5LjE2Ni0yMC4zOTMgODAuMjI1IDE1Ljg5NCAxMTYuNTExIDIzLjc0OCAyMy43NDggNTQuNjc5IDM0LjQyMSA4MS4zOTUgMzAuNzlsMTE1LjYzMSAxNjMuNzg2YzEyLjIxNiAxNy4zMDQgMzYuMTA5IDIxLjM2NCA1My4zNDggOS4xOTUgMTcuMjctMTIuMTkyIDIxLjM4Ny0zNi4wNzcgOS4xOTQtNTMuMzQ3eiIgZmlsbD0iI2ZmZDNiZCIvPjxwYXRoIGQ9Im00NzkuMTM4IDM0My4wMDktODcuODQtMTI0LjQyMWMtOS4zNDItMTMuMjMyLTE0LjkzNC0yOC42NTQtMTYuODgtNDQuNzM0LTIuNTU3LTIxLjEyNC0xMy4wMjItNDMuMDI5LTMwLjg2OS02MC44NzctMzYuMjg2LTM2LjI4Ni05Mi4zNDYtNDAuMDU5LTEyMS41MTEtMTAuODk0LTI5LjE2NiAyOS4xNjYtMjAuMzkzIDgwLjIyNSAxNS44OTQgMTE2LjUxMSAyMy43NDggMjMuNzQ4IDU0LjY3OSAzNC40MjEgODEuMzk1IDMwLjc5bDk2LjE3MiAxMzYuMjIyYzkuNzA4LTE0LjM1NiAzNi4xODYtMzYuMTUxIDYzLjYzOS00Mi41OTd6IiBmaWxsPSIjNGI1MTY1Ii8+PGc+PHBhdGggZD0ibTI5Ny4yOTIgMTUyLjc2OWMtMTguMDM3LTI1LjA0My03OS41MzQtNzIuMDAxLTEwMy45LTQyLjE2NS00MC41MzggNDkuNjM4LTg0LjQ2NyAxNTYuNDM1LTQ3LjQxOCAxOTMuNDg0czExOS4zOTYgMi45ODIgMTY5LjAzNC0zNy41NTZjMjkuODM1LTI0LjM2NiA5LjMwMS03Ni4yNTItMTcuNzE2LTExMy43NjN6IiBmaWxsPSIjZDFjNGU5Ii8+PHBhdGggZD0ibTIxMC45NTQgMjIzLjkzN2MtMTcuMzA3LTE3LjMwOC0zOC41ODItMjkuOTY1LTYxLjQyMy0zNi45NzItMTguNTk0IDQ1Ljc4LTI2LjIwMiA5NC40NzktMy41NTggMTE3LjEyMyAyMy43NDMgMjMuNzQzIDY2LjA4OCAxOC4yNzkgMTA2LjUwNy42MjMtNC43NjYtMzAuMjE4LTE5LjE3Mi01OC40MjEtNDEuNTI2LTgwLjc3NHoiIGZpbGw9IiNiMGFkZTIiLz48ZWxsaXBzZSBjeD0iMTE0LjkxNCIgY3k9IjMxOS45NzciIGZpbGw9IiNmZmQzYmQiIHJ4PSI5MC44MjIiIHJ5PSI5Ny42NyIgdHJhbnNmb3JtPSJtYXRyaXgoLjcwNyAtLjcwNyAuNzA3IC43MDcgLTE5Mi42IDE3NC45NzYpIi8+PHBhdGggZD0ibTU5LjYxNiAyMzkuNzY4Yy00Ljg4MyAzLjE3OC05LjUwMiA2Ljg4My0xMy43NjUgMTEuMTQ2LTM1LjQ2OCAzNS40NjgtMzMuMyA5NS4xNDEgNC44NDIgMTMzLjI4M3M5Ny44MTUgNDAuMzEgMTMzLjI4MyA0Ljg0MmMuMTE0LS4xMTQuMjE4LS4yMzUuMzMxLS4zNDktMTIwLjgwNyAzMC41NzctMTUwLjgxMS05Ny42OTgtMTI0LjY5MS0xNDguOTIyeiIgZmlsbD0iI2ZmYmU5ZCIvPjxnPjxnPjxlbGxpcHNlIGN4PSIxMjEuMDk2IiBjeT0iMzM2LjM0NyIgZmlsbD0iI2VkYTFhYiIgcng9IjIzLjM3NyIgcnk9IjI5LjM1NSIgdHJhbnNmb3JtPSJtYXRyaXgoLjcwNyAtLjcwNyAuNzA3IC43MDcgLTIwMi4zNjUgMTg0LjE0MSkiLz48L2c+PC9nPjxwYXRoIGQ9Im01OC4yMSAzOTcuNjM4YzEwLjgwMS0yMi4zOTQgMjMuMzUyLTY2LjkwMSAyMy44NTQtOTAuNTI1bDE1LjcyOC0zMy4xNzJjMTkuNTAyIDEuNzE3IDUyLjg0NS0zMC45OTcgNTMuNDc0LTUxLjc1N3MtODQuODUxLTIyLjYzNi0xMjIuMDQ2IDIzLjkwNmMtMzIuMzc4IDQwLjUxNC0yOC41MDYgMTExLjQzMSAxMS4zOTcgMTU0LjEyNCA1LjE3NCA1LjUzNCAxNC4zMDEgNC4yNDggMTcuNTkzLTIuNTc2eiIgZmlsbD0iIzRiNTE2NSIvPjwvZz48cGF0aCBkPSJtMTgwLjc3MiA0MjguMDcyYy0yMC40MjMtNS40NjQtMzIuNTQ5LTI2LjQ0OS0yNy4wODUtNDYuODcxbDMzLjIyNi0xMjcuMDQ2YzUuNDY1LTIwLjQyNCAyNi40NTItMzIuNTQ0IDQ2Ljg3MS0yNy4wODUgMjAuNDIzIDUuNDY0IDMyLjU0OSAyNi40NDkgMjcuMDg1IDQ2Ljg3MWwtMzMuMjI2IDEyNy4wNDZjLTUuNDUgMjAuMzcxLTI2LjM5NSAzMi41NjItNDYuODcxIDI3LjA4NXoiIGZpbGw9IiNmZmJlOWQiLz48cGF0aCBkPSJtMTA0LjA5MiAyNzMuMDg2Yy05Ljk2LTkuOTYtMjYuMTA4LTkuOTYtMzYuMDY4IDBzLTkuOTYgMjYuMTA4IDAgMzYuMDY4IDE4LjgzNSAyLjY4NyAyOC43OTUtNy4yNzNjOS45Ni05Ljk1OSAxNy4yMzItMTguODM1IDcuMjczLTI4Ljc5NXoiIGZpbGw9IiNmZmJlOWQiLz48cGF0aCBkPSJtNTAzLjYyNyAzNjQuNjkzYy00Ni4wODctNjUuMjgxLTYxLjA5Ni04Ni41NC0xMDYuMjAyLTE1MC40MzItOC4zMzktMTEuODEtMTMuNzItMjYuMDk1LTE1LjU2Mi00MS4zMDktMi44NjYtMjMuNjc0LTE0LjU5LTQ2Ljg1Ni0zMy4wMTItNjUuMjc5LTM3LjM5NS0zNy4zOTUtOTUuNDUxLTQzLjMxMy0xMjguODg4LTEzLjg4LTEyLjc2NC0xLjMzOS0yNC4zNCAyLjIyMS0zMi4zOCAxMi4wNjctMjAuMzE4IDI0Ljg3OS00MC4yMTUgNjIuMTI4LTUxLjc5OCA5Ni42MjMtMTkuNDQ2LTQuMDc5LTQ5LjAwMy0xLjQ1My03NS4zNjcgMTAuNzQtMy43NTkgMS43MzktNS4zOTcgNi4xOTYtMy42NTkgOS45NTYgMS43MzkgMy43NTkgNi4xOTQgNS4zOTYgOS45NTYgMy42NTkgMjYuNTU3LTEyLjI4MiA1OC4zMDktMTMuNjE0IDcyLjQ5Mi03LjgwNyAzLjMyMiAxLjM1OSA0LjQ0NSAyLjY2MiA0LjU2MyAyLjkyNi0uNDE0IDEzLjY2Ni0yMS4xMjEgMzYuODI2LTM3LjU3MSA0My4wMjYtMTIuOTMzLTkuOTc5LTMxLjYyNS05LjA1My00My40NzggMi44LTEyLjg2NiAxMi44NjctMTIuODY2IDMzLjgwNiAwIDQ2LjY3NCAzLjU4NSAzLjU4NCA3LjE1OSA1LjUwNSAxMC41MTEgNi4zNjktMy40MDMgMjIuNzY2LTEyLjc4NCA1NC45MS0yMS43NzYgNzMuNTU0LTEuMDExIDIuMDk1LTMuNzk5IDIuMzc5LTUuMzU4LjcxMi00MC4zMTYtNDMuMTMzLTQwLjQ1OS0xMTUuMDgyLTUuOTE3LTE1MC4wNTIgMi45MTItMi45NDUgMi44ODQtNy42OTQtLjA2My0xMC42MDYtMi45NDMtMi45MS03LjY5Mi0yLjg4NS0xMC42MDYuMDYzLTQxLjQwOSA0MS44OTItMzguOTc1IDEyMy4xMTkgNS42MjYgMTcwLjgzOCA3LjgxNiA4LjM2MiAyMS4xOTMgNy42MDcgMjcuOTc4LTEuNDEyIDI2LjY1MyAxNy41NTIgNTkuNzY2IDIyLjgzMyA4OS42OCAxMi44NzUgMTAuMzQ3IDE1LjI5MiAyNS4zODUgMTguMjExIDI2LjAzOCAxOC41MjEgMjQuMzUgNi41MTQgNDkuNTIzLTcuOTc2IDU2LjA2Ni0zMi40MzNsMjQuMzE2LTkyLjk3OGMyOS40OS0xMy40NTMgNTYuODI2LTMzLjMxNCA2NC41NDMtNDEuMjM5bDk3LjcwNyAxMzguMzk4YzIuMzkyIDMuMzkgNy4wNzQgNC4xODggMTAuNDUyIDEuODAyIDMuMzg0LTIuMzg5IDQuMTktNy4wNjggMS44MDItMTAuNDUybC04LjkzNi0xMi42NTdjOS42MDQtMTEuNTU5IDI5LjQ5Ni0yNy41MzYgNTEuMjQ3LTM0LjE0N2wxNS4zNDIgMjEuNzMxYzkuODEgMTMuODk2IDYuNTA2IDMzLjA4NC03LjM5MyA0Mi44OTYtOC42MjcgNi4wODktMTkuNjIxIDcuMzQxLTI5LjQxMSAzLjM0Ny0zLjgzNy0xLjU2NC04LjIxMy4yNzctOS43NzcgNC4xMTNzLjI3OCA4LjIxMyA0LjExMyA5Ljc3N2MxNC41MDUgNS45MTMgMzAuODU1IDQuMTAzIDQzLjcyNS00Ljk4MyAyMC42NjgtMTQuNTkgMjUuNTkzLTQzLjEzIDEwLjk5Ny02My44MDF6bS00MTcuNTY5LTkxLjU2OGM4LjIzNiAwIDEyLjgyMSA1LjQwMyAxMi45MjEgNS40NjkuMDUyLjA1NC4xMTEuMTAxLjE2NC4xNTMgMy4xNzYgMy4yMDUgNC42NTMgNS41NTEtNy42MjcgMTcuODMxLTMuNjQyIDMuNjQyLTcuOTUzIDcuOTM2LTEyLjQ3MyA5LjY1NS0xLjI2Ny4zOTQtMi45MTQuNDItNS43MTYtMi4zODEtMTEuMzQ5LTExLjM1LTMuMjAxLTMwLjcyNyAxMi43MzEtMzAuNzI3em02MC4zODQgMTA2LjEzN2MtMi4xMjIgNy45MjktMi4wNzUgMTYuMDkyLjAyOCAyMy44MDYtMjUuMjY4IDcuODQxLTUzLjcxNyAzLjEyLTc2Ljg1My0xMi44NTQgOC4wOC0yMC4yMzMgMTYuNDI5LTQ5LjU4NSAxOS4wOTktNzEuOTQ3IDQuODU4LTIuNzQ4IDkuMjY1LTYuOTQxIDEzLjQwNy0xMS4wODMgOC41NTEtOC41NTMgMTcuMDgyLTE4LjIyNCAxMy4zNDEtMjkuOTIzIDEzLjgzNS02LjY1NyAyNy42OTktMjAuMDA5IDM1LjcwMi0zMy4wNDggOS43NyA1LjIzOCAxOC4zODUgMTIuMDM2IDI1LjQzMSAxOS43NDV6bTEwNy4xNzEtMTA3LjIxOC0zMy4yMTUgMTI3LjAwNWMtNC4zODcgMTYuMzkzLTIxLjI4OSAyNi4xNjctMzcuNjg5IDIxLjc3OGguMDAxYy0xNi4zOTUtNC4zODctMjYuMTY0LTIxLjI5NC0yMS43NjctMzcuNzI5IDMuNTUxLTEzLjU3OCAyOS40MjQtMTEyLjUxIDMzLjIxNS0xMjcuMDA0IDQuMzg2LTE2LjM5MiAyMS4yOTMtMjYuMTYgMzcuNjg4LTIxLjc3OCAxNi4zNzQgNC4zODEgMjYuMTk1IDIxLjE3OCAyMS43NjcgMzcuNzI4em01Ni42NS0xMS4zMmMtMTMuNzggMTEuMjUzLTI5Ljc0MSAyMS42NDUtNDYuMDQ5IDMwLjA3M2wzLjkwMS0xNC45MTdjNi41NC0yNC40NC03Ljk0Ni00OS41MTUtMzIuMzkzLTU2LjA1NS0yMi43MjYtNi4wODEtNDYuMDk5IDYuMTMyLTU0LjQ2NyAyNy41ODMtNy4yMy02LjY5NS0xNS4yMjMtMTIuMzM0LTIzLjg1LTE2Ljg2Mi44MTUtMi44MjkgMS4yNzktNS41NTggMS4zNTctOC4xMzUuMTYxLTUuMy0yLjQ4Mi0xMC43MzQtOC44OTgtMTQuNzI5IDExLjAwNy0zMi45OTcgMjkuOTg2LTY4LjYzOSA0OS4zMzctOTIuMzM0IDE4LjgxMy0yMy4wNDIgNzQuNjEyIDE3LjY1NCA5Mi4wMDYgNDEuODA2IDIwLjczIDI4Ljc4MSA0Ni42NDYgODEuMDM3IDE5LjA1NiAxMDMuNTd6bTEwNS42MzQgMTEyLjQ0Ni04My4xNi0xMTcuNzkyYzE0LjM2My0zMi40MjktOC42NzktNzguMjgtMjkuMzU5LTEwNi45OTEtMTAuNzE3LTE0Ljg4LTM3Ljc5LTM5LjEzOC02NC41MzItNDkuNjk2IDI2LjUxNy0xNS4xMzEgNjkuMDE5LTEwLjc5MiA5OS4zOTkgMTkuNTg5IDE2LjA2MSAxNi4wNiAyNi4yNjQgMzYuMTE3IDI4LjcyOSA1Ni40NzUgMi4xMzkgMTcuNjcyIDguNDMyIDM0LjMyNCAxOC4xOTggNDguMTU3bDgxLjgzIDExNS45MDljLTIxLjE2MiA3LjYxMy0zOS45OTcgMjIuMTg2LTUxLjEwNSAzNC4zNDl6bS0zMDMuOTE5LTE0LjExNy04LjQ4NSA4LjQ4NWMtMi45MjkgMi45My0yLjkyOSA3LjY3OCAwIDEwLjYwNyAyLjkzMSAyLjkyOSA3LjY3OCAyLjkyOCAxMC42MDcgMGw4LjQ4NS04LjQ4NWMyLjkyOS0yLjkzIDIuOTI5LTcuNjc4IDAtMTAuNjA3LTIuOTMtMi45MjgtNy42NzgtMi45MjgtMTAuNjA3IDB6Ii8+PC9nPjwvc3ZnPg==" />
                <span class="w3-large">Ciencias de la Actividad Física y el Deporte </span><br>
            </div>
          
        </li>
        
        
        <li class="w3-bar list-group-item ml-5" style="list-style: none">
            <div class="w3-bar-item">
                <img  class="w3-bar-item w3-circle w3-hide-small"  style="width:60px" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjUxMXB0IiB2aWV3Qm94PSIwIC0xNSA1MTEuOTk3MiA1MTEiIHdpZHRoPSI1MTFwdCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJtNTA0LjQ0OTIxOSAyNjguNDkyMTg4YzAgNjcuNDkyMTg3LTQzLjYyNSAxMjIuNzE4NzUtOTYuOTQ1MzEzIDEyMi43MTg3NWgtNTYuODc4OTA2Yy0xNC43NzM0MzggMC0yOC44MTI1LTQuMjQyMTg4LTQxLjM3MTA5NC0xMS44MTY0MDctMzYuMjY5NTMxLTIxLjgzMjAzMS01NS41NzQyMTgtNjcuMTM2NzE5LTU1LjU3NDIxOC0xMTAuOTAyMzQzIDAtMzIuMDU4NTk0IDExLjkwNjI1LTYwLjc2MTcxOSAzMC40MTAxNTYtNzkuMzYzMjgyIDEwLjY0MDYyNS0xMC43MTA5MzcgMTkuMDA3ODEyLTI0LjI2OTUzMSAyNC42OTkyMTgtMzkuNDQxNDA2IDQuMTA1NDY5LTEwLjkyMTg3NSA2LjgyMDMxMy0yMi42Njc5NjkgOC4wMjczNDQtMzQuODE2NDA2LjQ3MjY1Ni00LjczODI4Mi43MTA5MzgtOS41NDI5NjkuNzEwOTM4LTE0LjM4MjgxMyAwLTQyLjgzOTg0MyAyNy42OTkyMTgtNzcuODg2NzE5IDYxLjUzOTA2Mi03Ny44ODY3MTkgMTYuOTIxODc1IDAgMzIuMzA4NTk0IDguNzYxNzE5IDQzLjQ2MDkzOCAyMi44Nzg5MDcgMTEuMTUyMzQ0IDE0LjEyMTA5MyAxOC4wNzQyMTggMzMuNTg5ODQzIDE4LjA3NDIxOCA1NS4wMDc4MTIgMCAzNC40MjU3ODEgMTIuMTU2MjUgNjcuMjE4NzUgMzMuNDQ1MzEzIDg4LjY0MDYyNSA5LjI0MjE4NyA5LjMwMDc4MiAxNi44NDc2NTYgMjEuMTI4OTA2IDIyLjEzNjcxOSAzNC42MzI4MTMgNS4yODkwNjIgMTMuNTE1NjI1IDguMjY1NjI1IDI4LjcwMzEyNSA4LjI2NTYyNSA0NC43MzA0Njl6bTAgMCIgZmlsbD0iIzM1ZTI5OCIvPjxwYXRoIGQ9Im0zNzMuODM1OTM4IDIyOS41ODU5MzhjLS43NTM5MDcgMjMuMjEwOTM3LTcuNDQxNDA3IDQ1Ljk0NTMxMi0xOC44NTU0NjkgNjYuNjcxODc0bC00NS43MjY1NjMgODMuMTM2NzE5Yy0zNi4yNjk1MzEtMjEuODMyMDMxLTU1LjU3NDIxOC02Ny4xMzY3MTktNTUuNTc0MjE4LTExMC45MDIzNDMgMC0zMi4wNTg1OTQgMTEuOTEwMTU2LTYwLjc2MTcxOSAzMC40MTQwNjItNzkuMzYzMjgyIDEwLjYzNjcxOS0xMC43MTA5MzcgMTkuMDAzOTA2LTI0LjI2OTUzMSAyNC42OTkyMTktMzkuNDQxNDA2IDQuMTAxNTYyLTEwLjkyMTg3NSA2LjgxNjQwNi0yMi42Njc5NjkgOC4wMjM0MzctMzQuODE2NDA2IDE4LjEyMTA5NCA5LjcyMjY1NiAzNy40NjA5MzggMjcuODI0MjE4IDQ5LjAyMzQzOCA2MS40MjU3ODEgNS45NjQ4NDQgMTcuMzM1OTM3IDguNTg5ODQ0IDM1LjM0NzY1NiA3Ljk5NjA5NCA1My4yODkwNjN6bTAgMCIgZmlsbD0iIzFhYjk3NSIvPjxwYXRoIGQ9Im00NTQuMDYyNSAyNzIuNzE0ODQ0YzAgNDAuMzQzNzUtMzIuNzAzMTI1IDczLjA0Njg3NS03My4wNDY4NzUgNzMuMDQ2ODc1cy03My4wNDY4NzUtMzIuNzAzMTI1LTczLjA0Njg3NS03My4wNDY4NzUgMzIuNzAzMTI1LTczLjA0Njg3NSA3My4wNDY4NzUtNzMuMDQ2ODc1IDczLjA0Njg3NSAzMi43MDMxMjUgNzMuMDQ2ODc1IDczLjA0Njg3NXptMCAwIiBmaWxsPSIjYWU1ODNlIi8+PHBhdGggZD0ibTM3MS45MDYyNSAyMDAuMjMwNDY5Yy02NC40NzY1NjIgOC4wMjM0MzctODYuODk4NDM4IDkwLjM4NjcxOS0zNS43MDMxMjUgMTMwLjE3MTg3NWwxOC43NzczNDQtMzQuMTQ0NTMyYzExLjQxNDA2Mi0yMC43MjY1NjIgMTguMTAxNTYyLTQzLjQ2MDkzNyAxOC44NTU0NjktNjYuNjcxODc0LjMyMDMxMi05LjgwNDY4OC0uMzEyNS0xOS42MzI4MTMtMS45Mjk2ODgtMjkuMzU1NDY5em0wIDAiIGZpbGw9IiM3YzNmMmMiLz48cGF0aCBkPSJtMTY1LjE1NjI1IDc2LjE1NjI1Yy0zLjgxNjQwNi0xNy4zODI4MTItMjMuNTA3ODEyLTgwLjMyODEyNS0xMDYuNjg3NS02Ni4wMDc4MTItMi40MjU3ODEuNDE3OTY4LTMuNzc3MzQ0IDMuMDQyOTY4LTIuNzE4NzUgNS4yNjE3MTggOC42MTMyODEgMTguMDk3NjU2IDQ1LjE2NDA2MiA4NS4xNjQwNjMgMTA2IDY2LjUwMzkwNiAyLjQ2MDkzOC0uNzUzOTA2IDMuOTU3MDMxLTMuMjQyMTg3IDMuNDA2MjUtNS43NTc4MTJ6bTAgMCIgZmlsbD0iIzFlZDY4OCIvPjxwYXRoIGQ9Im0xNjEuNzQ2MDk0IDgxLjkxNDA2MmMtNjAuODMyMDMyIDE4LjY2NDA2My05Ny4zNzg5MDYtNDguNDAyMzQzLTEwNS45OTYwOTQtNjYuNTAzOTA2LTEuMDU0Njg4LTIuMjIyNjU2LjI5Mjk2OS00Ljg0NzY1NiAyLjcxNDg0NC01LjI2MTcxOCA3LjEyMTA5NC0xLjIyNjU2MyAxMy43ODkwNjItMS44OTA2MjYgMjAuMDExNzE4LTIuMDUwNzgyIDEyLjc2MTcxOSAyMi41MTU2MjUgNDEuMzMyMDMyIDYxLjgxNjQwNiA4NC4xMzI4MTMgNTguNzg5MDYzIDEuMjE4NzUgMy43MjI2NTYgMi4wMzEyNSA2LjkyMTg3NSAyLjU0Mjk2OSA5LjI3MzQzNy41NTQ2ODcgMi41MTU2MjUtLjk0NTMxMyA0Ljk5NjA5NC0zLjQwNjI1IDUuNzUzOTA2em0wIDAiIGZpbGw9IiMxYWI5NzUiLz48cGF0aCBkPSJtMzEyLjAwNzgxMiAyOTYuMjU3ODEyLTUzLjA3ODEyNCA5Ni41Yy0xMy43MjY1NjMgMjIuNDkyMTg4LTQ0Ljk1NzAzMiAzMC42NjAxNTctNjkuNjAxNTYzIDE3LjgxMjUtMTIuNjI4OTA2LTYuNTg5ODQzLTI3LjUzMTI1LTYuNTg5ODQzLTQwLjE3MTg3NSAwLTI0LjA3ODEyNSAxMi41NTA3ODItNTUuNSA1LjI1LTY5LjU5Mzc1LTE3LjgxMjVsLTUzLjA4NTkzOC05Ni41Yy0yMS43NDYwOTMtMzkuNTE5NTMxLTIzLjkyOTY4Ny04MS45MTQwNjItMTAuODYzMjgxLTExOS45NjQ4NDMgMTYuMzEyNS00Ny40MDYyNSA0OC4xMzI4MTMtNjMuOTQ5MjE5IDcwLjExMzI4MS02OS42NjAxNTcgMTAuMDg5ODQ0LTIuNjI1IDE4LjExMzI4Mi0yLjk2ODc1IDIxLjYyMTA5NC0yLjk2ODc1IDEuMjUgMCAxLjkyMTg3NS4wMzkwNjMgMS45MjE4NzUuMDM5MDYzIDkuOTM3NSAwIDE5LjQ2MDkzOCAxLjY3MTg3NSAyOC4yMzgyODEgNC43MTg3NSA4Ljc2OTUzMiAzLjA0Njg3NSAxNi44MTY0MDcgNy40ODA0NjkgMjMuODA0Njg4IDEzLjAwMzkwNiAyLjI4MTI1IDEuOTQ5MjE5IDUuMTA5Mzc1IDIuOTMzNTk0IDcuOTMzNTk0IDIuOTMzNTk0IDIuODI4MTI1IDAgNS42NTIzNDQtLjk4NDM3NSA3LjkzNzUtMi45MzM1OTQgNi45ODgyODEtNS41MjM0MzcgMTUuMDIzNDM3LTkuOTU3MDMxIDIzLjgwMDc4MS0xMy4wMDM5MDYgOC43ODEyNS0zLjA0Njg3NSAxOC4yOTI5NjktNC43MTg3NSAyOC4yMzgyODEtNC43MTg3NSAwIDAgNjcuMjA3MDMyLTQuMjgxMjUgOTMuNjQ4NDM4IDcyLjU4OTg0NCAxMy4xNzE4NzUgMzguMjk2ODc1IDEwLjc2MTcxOCA4MC42OTkyMTktMTAuODYzMjgyIDExOS45NjQ4NDN6bTAgMCIgZmlsbD0iI2M0MmQyZCIvPjxwYXRoIGQ9Im0zMTIuMDA3ODEyIDI5Ni4yNTc4MTItNTMuMDc4MTI0IDk2LjVjLTEzLjcyNjU2MyAyMi40OTIxODgtNDQuOTU3MDMyIDMwLjY2MDE1Ny02OS42MDE1NjMgMTcuODEyNS0xMi42Mjg5MDYtNi41ODk4NDMtMjcuNTMxMjUtNi41ODk4NDMtNDAuMTcxODc1IDAtNi43ODEyNSAzLjUzMTI1LTE0LjAyNzM0NCA1LjQ0MTQwNy0yMS4xMDkzNzUgNS45NDE0MDctLjQwNjI1LS44MDg1OTQtNDIuNTUwNzgxLTkzLjUtNTMuMzAwNzgxLTExNy4xMjg5MDctMzIuMTM2NzE5LTcwLjY1MjM0My0xOS42NzU3ODItMTQ5LjM4MjgxMiAxMC45ODA0NjgtMTkyLjc1IDEwLjA4OTg0NC0yLjYyNSAxOC4xMTMyODItMi45Njg3NSAyMS42MjEwOTQtMi45Njg3NSAxLjI1IDAgMS45MjE4NzUuMDM5MDYzIDEuOTIxODc1LjAzOTA2MyA5LjkzNzUgMCAxOS40NjA5MzggMS42NzE4NzUgMjguMjM4MjgxIDQuNzE4NzUgOC43Njk1MzIgMy4wNDY4NzUgMTYuODE2NDA3IDcuNDgwNDY5IDIzLjgwNDY4OCAxMy4wMDM5MDYgMi4yODEyNSAxLjk0OTIxOSA1LjEwOTM3NSAyLjkzMzU5NCA3LjkzMzU5NCAyLjkzMzU5NCAyLjgyODEyNSAwIDUuNjUyMzQ0LS45ODQzNzUgNy45Mzc1LTIuOTMzNTk0IDYuOTg4MjgxLTUuNTIzNDM3IDE1LjAyMzQzNy05Ljk1NzAzMSAyMy44MDA3ODEtMTMuMDAzOTA2IDguNzgxMjUtMy4wNDY4NzUgMTguMjkyOTY5LTQuNzE4NzUgMjguMjM4MjgxLTQuNzE4NzUgMCAwIDY3LjIwNzAzMi00LjI4MTI1IDkzLjY0ODQzOCA3Mi41ODk4NDQgMTMuMTcxODc1IDM4LjI5Njg3NSAxMC43NjE3MTggODAuNjk5MjE5LTEwLjg2MzI4MiAxMTkuOTY0ODQzem0wIDAiIGZpbGw9IiNmNDQ1NDUiLz48cGF0aCBkPSJtNzMuNTAzOTA2IDMyMC4yNzM0MzhjLTguNDY4NzUgNC40Njg3NS0xMS43MDcwMzEgMTQuOTUzMTI0LTcuMjM4MjgxIDIzLjQyMTg3NCA1LjIzODI4MSA5LjkyOTY4OCAxMS44NjMyODEgMTguNTUwNzgyIDE5LjE5MTQwNiAyNi4wMTk1MzJsLTU3LjgxNjQwNi02LjQ0MTQwNmMtOS41MTU2MjUtMS4wNjI1LTE4LjA4NTkzNyA1Ljc5Mjk2OC0xOS4xNDg0MzcgMTUuMzA0Njg3LTEuMDU4NTk0IDkuNTE1NjI1IDUuNzkyOTY4IDE4LjA4NTkzNyAxNS4zMDg1OTMgMTkuMTQ4NDM3bDU3LjgxNjQwNyA2LjQ0MTQwN2MtOC43ODkwNjMgNS42NzE4NzUtMTcuMTUyMzQ0IDEyLjYyNS0yNC40NDkyMTkgMjEuMTYwMTU2LTYuMjIyNjU3IDcuMjczNDM3LTUuMzY3MTg4IDE4LjIxNDg0NCAxLjkwNjI1IDI0LjQzNzUgNy4yNzczNDMgNi4yMjI2NTYgMTguMjE0ODQzIDUuMzY3MTg3IDI0LjQzNzUtMS45MDYyNSAxOS44MDg1OTMtMjMuMTYwMTU2IDU1LjcxMDkzNy0zMy4wODk4NDQgODYuMDk3NjU2LTM0LjA4NTkzNyAxMi4wNTg1OTQtLjM4NjcxOSAyMC4wNjY0MDYtMTIuNzMwNDY5IDE1LjQ1NzAzMS0yMy45MDYyNS0yLjA4OTg0NC01LjA3MDMxMy02LjU4MjAzMS05LjA0Njg3Ni0xMi4yNDYwOTQtMTAuMzEyNS0uNTUwNzgxLS4xMjUtNTUuNDg0Mzc0LTEzLjM1OTM3Ni03NS44OTg0MzctNTIuMDM5MDYzLTQuNDY4NzUtOC40Njg3NS0xNC45NTMxMjUtMTEuNzA3MDMxLTIzLjQxNzk2OS03LjI0MjE4N3ptMCAwIiBmaWxsPSIjMWFiOTc1Ii8+PHBhdGggZD0ibTUwMi41MjczNDQgNDMzLjcyMjY1NmMtMi40NzI2NTYgMjIuMjAzMTI1LTIxLjIyNjU2MyAzOS4wMTk1MzItNDMuNTc0MjE5IDM5LjA1ODU5NC0xMjguMTE3MTg3LjI1LTM4LjU3NDIxOS4wNzgxMjUtMjQ0Ljc4NTE1Ni40NzI2NTYtNDIuODM5ODQ0LjA3ODEyNS03Ni4yMTQ4NDQtMzcuMTQ4NDM3LTcxLjQ2ODc1LTc5LjcxODc1IDEuMDQyOTY5LTkuMzUxNTYyIDMuODMyMDMxLTE4LjA1MDc4MSA3Ljk3MjY1Ni0yNS44MzU5MzcgMTIuMjg5MDYzLTIzLjA0Njg3NSAzNi41OTc2NTYtMzguMDExNzE5IDYzLjI1NzgxMy0zOC4wMTE3MTkgNS4yODkwNjIgMCAxMC42Nzk2ODcuNTgyMDMxIDE2LjA3ODEyNCAxLjgyMDMxMiAxODEuNjkxNDA3IDQxLjUxMTcxOSAxOTUuNzg1MTU3IDQ0LjczMDQ2OSAyMDcuNTg1OTM4IDQ3LjQyNTc4MmwxNC44MjQyMTkgMy4zOTA2MjUgMTYuMjMwNDY5IDMuNzEwOTM3YzE3LjcxMDkzNyA0LjAzMTI1IDMwLjY1MjM0MyAxOC4zNjMyODIgMzMuNTM5MDYyIDM1LjUwNzgxMy42NzE4NzUgMy45MzM1OTMuODA0Njg4IDguMDIzNDM3LjMzOTg0NCAxMi4xNzk2ODd6bTAgMCIgZmlsbD0iI2ZmYTkwYiIvPjxwYXRoIGQ9Im01MDIuMTg3NSA0MjEuNTQyOTY5Yy04LjA0Njg3NSAxMC41MTk1MzEtMjAuNzE4NzUgMTcuMjI2NTYyLTM0LjgxNjQwNiAxNy4yNDYwOTMtMTI4LjEwOTM3NS4yNTM5MDctMzguNTY2NDA2LjA4MjAzMi0yNDQuNzczNDM4LjQ3MjY1Ny00MC4wODU5MzcuMDcwMzEyLTcxLjg3NS0zMi41LTcxLjkyNTc4MS03MS41NjI1IDEyLjI4OTA2My0yMy4wNDY4NzUgMzYuNTkzNzUtMzguMDExNzE5IDYzLjI1MzkwNi0zOC4wMTE3MTkgMi44NjcxODggMCA1Ljc1MzkwNy4xNzE4NzUgOC42NjAxNTcuNTMxMjUgMi40NjQ4NDMuMjkyOTY5IDQuOTQ5MjE4LjcyNjU2MiA3LjQyMTg3NCAxLjI4OTA2Mmw3LjQxMDE1NyAxLjY4NzVjMTkxLjkxMDE1NiA0My44NTkzNzYgMjAuODI0MjE5IDQuNzYxNzE5IDIwMC4xNzU3ODEgNDUuNzM4MjgybDE0LjgyNDIxOSAzLjM5MDYyNSAxNi4yMzA0NjkgMy43MTA5MzdjMTcuNzEwOTM3IDQuMDMxMjUgMzAuNjUyMzQzIDE4LjM2MzI4MiAzMy41MzkwNjIgMzUuNTA3ODEzem0wIDAiIGZpbGw9IiNmZmI1MmQiLz48cGF0aCBkPSJtMjYuODk4NDM4IDM3MC43NzczNDRjLjAzNTE1Ni4wMDM5MDYuMDc4MTI0LjAwNzgxMi4xMjEwOTMuMDE1NjI1LS4wMzUxNTYtLjAwMzkwNy0uMDc4MTI1LS4wMTE3MTktLjEyMTA5My0uMDE1NjI1em0wIDAiLz48cGF0aCBkPSJtMjcuMTkxNDA2IDM3MC44MTI1Yy4wMjM0MzggMCAuMDM5MDYzLjAwMzkwNi4wNDY4NzUuMDAzOTA2LS4wMDc4MTIgMC0uMDE5NTMxLS4wMDM5MDYtLjA0Njg3NS0uMDAzOTA2em0wIDAiLz48cGF0aCBkPSJtNDcwLjMyODEyNSAzNzguNjgzNTk0LTUuNTcwMzEzLTEuMjc3MzQ0YzUzLjk4NDM3Ni00NC4yMzA0NjkgNjUuNDg4MjgyLTE0Mi40Mjk2ODggMTQuNjQwNjI2LTE5My41OTc2NTYtMTkuNTcwMzEzLTE5LjY3OTY4OC0zMS4yNTM5MDctNTAuODI4MTI1LTMxLjI1MzkwNy04My4zMjAzMTMgMC00Ny4xMDE1NjItMzAuOTg0Mzc1LTg1LjQyOTY4Ny02OS4wNzgxMjUtODUuNDI5Njg3LTM4LjA4NTkzNyAwLTY5LjA3ODEyNSAzOC4zMjgxMjUtNjkuMDc4MTI1IDg1LjQyOTY4NyAwIDEwLjcwMzEyNS0xLjI2OTUzMSAyMS4yNS0zLjY3MTg3NSAzMS4yODUxNTctMzUuNDg4MjgxLTQwLjk1NzAzMi05MS44NDM3NS00NS42NTYyNS0xMjkuNTI3MzQ0LTE5LjQ2ODc1di05Ni4wNzgxMjZjMC00LjE2NDA2Mi0zLjM3ODkwNi03LjU0Mjk2OC03LjU0Mjk2OC03LjU0Mjk2OC00LjE2NDA2MyAwLTcuNTQyOTY5IDMuMzc4OTA2LTcuNTQyOTY5IDcuNTQyOTY4djI5LjYxNzE4OGMtMjIuNTIzNDM3LTQwLjY0MDYyNS02My41MTU2MjUtNTEuNTExNzE5LTEwOS40MjE4NzUtNDIuMjY5NTMxLTQuNjM2NzE5LjkzNzUtNy4yODEyNSA1Ljg3NS01LjQ5MjE4OCAxMC4yNTc4MTIuNDIxODc2IDEuMDI3MzQ0IDEwLjU3ODEyNiAyNS41MTU2MjUgMzAuMjEwOTM4IDQ2Ljk1MzEyNSAyMy4yMzA0NjkgMjUuMzgyODEzIDUyLjA2MjUgMzcuOTg0Mzc1IDg0LjcwMzEyNSAyOC45NDUzMTN2MjIuNTc0MjE5Yy00NC4yOTY4NzUtMzAuNzgxMjUtMTE4LjQ3MjY1Ni0xOS43MzA0NjktMTQ4Ljk0NTMxMyA1MC40NTMxMjQtMS42NjAxNTYgMy44MjQyMTkuMTAxNTYzIDguMjU3ODEzIDMuOTIxODc2IDkuOTE3OTY5IDMuODIwMzEyIDEuNjYwMTU3IDguMjU3ODEyLS4wODk4NDMgOS45MTc5NjgtMy45MTQwNjIgMjcuODg2NzE5LTY0LjIxODc1IDk0LjU3MDMxMy02OS40MTAxNTcgMTI5LjkzNzUtNDEuNTUwNzgxIDcuMzYzMjgyIDYuMTk1MzEyIDE4LjEwMTU2MyA2LjE2NDA2MiAyNS40MjE4NzUgMCA0MC4yNjU2MjUtMzEuNzE0ODQ0IDEwOS45MTc5NjktMTcuOTEwMTU3IDEzMy43ODEyNSA1MS40NzY1NjIgMTIuODMyMDMxIDM3LjM3MTA5NCAxMC4yNjk1MzEgNzYuNDQ5MjE5LTEyLjAwMzkwNiAxMTYuODc4OTA2LTguODYzMjgxIDE1Ljg0NzY1Ni0xNi4xNDA2MjUgMjkuMDIzNDM4LTIyLjE1NjI1IDM5Ljk5MjE4OC00Ni43MTQ4NDQtMTAuMDYyNS01My4zNzg5MDYtMTMuNzM4MjgyLTY5LjI3NzM0NC0xMy4zOTQ1MzItNC4xNjQwNjIuMDgyMDMyLTcuNDcyNjU2IDMuNTE5NTMyLTcuMzgyODEyIDcuNjgzNTk0LjA3ODEyNSA0LjE3MTg3NSAzLjUwNzgxMiA3LjQ5MjE4OCA3LjY5MTQwNiA3LjM5MDYyNSAyLjczODI4MS0uMDU4NTkzIDUuODQzNzUuMDgyMDMxIDkuMTIxMDk0LjQ4NDM3NWwtNC41MjczNDQgNDAuNjI1Yy0uNDYwOTM3IDQuMTM2NzE5IDIuNTIzNDM3IDcuODY3MTg4IDYuNjY0MDYzIDguMzI4MTI1IDQuMTU2MjUuNDYwOTM4IDcuODcxMDkzLTIuNTM1MTU2IDguMzMyMDMxLTYuNjYwMTU2bDQuMzc1LTM5LjI3MzQzN2MzMC4xMjg5MDYgNi44Nzg5MDYgNDkuNzM4MjgxIDExLjM2MzI4MSA3My4xMDE1NjIgMTYuNzAzMTI0bC0yLjE2MDE1NiAxOS4zNzVjLS40NjA5MzcgNC4xNDA2MjYgMi41MjM0MzcgNy44NjcxODggNi42NjQwNjMgOC4zMzIwMzIgNC4xNTYyNS40NTcwMzEgNy44NzEwOTMtMi41MzUxNTYgOC4zMjgxMjQtNi42NjQwNjNsMS45Njg3NS0xNy42NjAxNTZjNC42NTYyNSAxLjA2NjQwNiAxMTEuNzEwOTM4IDI1LjUxOTUzMSAxMTMuMDU0Njg4IDI1LjgyODEyNWwtNS44MjQyMTkgNTIuMjkyOTY5Yy0uNDYwOTM3IDQuMTQwNjI1IDIuNTE5NTMxIDcuODcxMDkzIDYuNjYwMTU3IDguMzMyMDMxIDQuMTU2MjUuNDYwOTM4IDcuODcxMDkzLTIuNTM1MTU2IDguMzMyMDMxLTYuNjYwMTU2bDUuNjM2NzE5LTUwLjU4NTkzOCAxNC42MzY3MTggMy4zNTE1NjNjMTguMTQ0NTMyIDQuMTQwNjI1IDMwLjEyNSAyMC45OTYwOTMgMjguMDU0Njg4IDM5LjUtMi4wNTA3ODIgMTguNDAyMzQzLTE3LjU2NjQwNiAzMi4zMTI1LTM2LjA4MjAzMiAzMi4zNTE1NjJsLTc3LjE5OTIxOC4xNDg0MzggMi43NDIxODctMjQuNTkzNzVjLjQ2MDkzOC00LjE0MDYyNS0yLjUxOTUzMS03Ljg3MTA5NC02LjY2MDE1Ni04LjMzMjAzMS00LjE0NDUzMS0uNDYwOTM4LTcuODcxMDk0IDIuNTE5NTMxLTguMzMyMDMxIDYuNjYwMTU2bC0yLjkyOTY4OCAyNi4yOTY4NzUtNzMuOTk2MDk0LjE0MDYyNSAyLjU3ODEyNi0yMy4xMjEwOTRjLjQ2MDkzNy00LjEzNjcxOS0yLjUyMzQzOC03Ljg2NzE4OC02LjY2NDA2My04LjMyODEyNS00LjEyODkwNi0uNDY0ODQ0LTcuODY3MTg3IDIuNTE5NTMxLTguMzI4MTI1IDYuNjYwMTU2LS42NDA2MjUgNS43NjE3MTktMi42OTkyMTkgMjQuMjA3MDMxLTIuNzYxNzE5IDI0LjgyMDMxM2wtMzUuNDI1NzgxLjA2NjQwNiA0LjQ4NDM3NS00MC4yNDYwOTRjLjQ2MDkzNy00LjEzNjcxOC0yLjUyMzQzNy03Ljg2NzE4Ny02LjY2NDA2My04LjMzMjAzMS00LjE0NDUzMS0uNDYwOTM3LTcuODY3MTg3IDIuNTIzNDM3LTguMzMyMDMxIDYuNjY0MDYzbC00LjY3MTg3NSA0MS45NDUzMTJjLS4wNzgxMjUgMC0uMTI4OTA2IDAtLjE3MTg3NSAwaC4wMDM5MDdjLS4wMDM5MDcgMC0uMDExNzE5IDAtLjAxOTUzMiAwLS4wMTE3MTggMC0uMDIzNDM3IDAtLjAzNTE1NiAwIDAgMC0uMDAzOTA2IDAtLjAwNzgxMiAwLS4wNTQ2ODggMC0uMDU4NTk0IDAtLjAzOTA2MyAwLS40ODgyODEgMC0yLjg1NTQ2OS4wMDM5MDYtMTIuNDkyMTg3LjAyMzQzOC0yOS42MDU0NjkgMC01NC45ODQzNzYtMjAuMTk1MzEzLTYyLjE5OTIxOS00OC4xMDE1NjMtNy40MDIzNDQtMjguNTAzOTA2IDUuNTU4NTkzLTYwLjMzMjAzMSAzNC43MzQzNzUtNzQuMTk1MzEzIDMuNzYxNzE4LTEuNzg5MDYyIDUuMzY3MTg3LTYuMjg1MTU2IDMuNTc4MTI1LTEwLjA0Njg3NC0xLjc4OTA2My0zLjc2MTcxOS02LjI4NTE1Ny01LjM3MTA5NC0xMC4wNDY4NzUtMy41ODIwMzItMTQuNzAzMTI1IDYuOTgwNDY5LTI2LjU2NjQwNiAxNy45ODQzNzUtMzQuNDYwOTM4IDMxLjQzNzUtMTUuMjY1NjI1LTcuNjEzMjgxLTMyLjcyNjU2Mi0xOS41ODk4NDQtNDIuMDM5MDYyLTM3LjIzMDQ2OC0xMi4wMzUxNTYtMjIuODU5Mzc2LTQ2Ljc0NjA5NC0xNC4yNzM0MzgtNDYuODYzMjgyIDExLjUzNTE1NmwtMjMuNjMyODEyLTQyLjk2MDkzOGMtMTYuMTk5MjE5LTI5LjQzMzU5NC0yMi4xMzI4MTItNjIuNDY4NzUtMTUuMDgyMDMxLTk2LjU2MjUuODQzNzUtNC4wODIwMzEtMS43ODEyNS04LjA3NDIxOC01Ljg2MzI4MS04LjkxNzk2OC00LjA4MjAzMi0uODQzNzUtOC4wNjY0MDcgMS43NzczNDMtOC45MTAxNTcgNS44NjMyODEtNy41NjI1IDM2LjU4NTkzNy0xLjgyMDMxMiA3My4zMzk4NDMgMTYuNjMyODEzIDEwNi44OTA2MjVsMzIuMjIyNjU2IDU4LjU2NjQwNi0yMy42MTMyODEtMi42MzI4MTJjLTEzLjY2NDA2My0xLjUxOTUzMi0yNS45NTcwMzEgOC4zMDA3ODEtMjcuNDc2NTYzIDIxLjk3MjY1Ni0xLjUxNTYyNSAxMy42MjUgOC4zMjgxMjUgMjUuOTU3MDMxIDIxLjk2NDg0NCAyNy40NzI2NTZsMzkuMDk3NjU2IDQuMzU1NDY5Yy05LjY5NTMxMiA4LjY3OTY4Ny0xNy41IDE2LjU0Njg3NS0xNi41MTk1MzEgMjguOTUzMTI1IDEuNjk1MzEzIDIxLjkyNTc4MSAyOS4yODUxNTYgMzEuMDY2NDA2IDQzLjcwMzEyNSAxNC4yMzA0NjggMTEuODY3MTg4LTEzLjg4NjcxOCAzMC40MTAxNTYtMjIuNDY0ODQzIDQ5LjIwNzAzMS0yNy4wOTM3NSAxMC4yMTg3NSAzMS45NDE0MDcgNDAuMjI2NTYzIDU1LjEyODkwNyA3NS41NjY0MDcgNTUuMTI4OTA3IDExLjQ5MjE4Ny0uMDE5NTMxIDIzMS4wNjY0MDYtLjQ0NTMxMyAyNDQuOTQ1MzEyLS40NzI2NTcgMjguNTExNzE5LS4wNTA3ODEgNTEuMzc4OTA2LTIzLjE1NjI1IDUxLjM3ODkwNi01MS41MDc4MTItLjAwMzkwNi0yNC4xMzI4MTItMTYuNDU3MDMxLTQ0Ljc1LTQwLjAxOTUzMS01MC4xMjg5MDZ6bS00MDUuNDU3MDMxLTM2MS45NTMxMjVjNTAuMTUyMzQ0LTYuODUxNTYzIDgxLjc3NzM0NCAxNy4wNTQ2ODcgOTIuMzM1OTM3IDU4LjU4NTkzNy00MC44NTkzNzUgMTEuMDAzOTA2LTcyLjk4ODI4MS0yMS4yOTY4NzUtOTIuMzM1OTM3LTU4LjU4NTkzN3ptMzgwLjIxNDg0NCAzNTYuMTc5Njg3LTE0OC4xNjQwNjMtMzMuODUxNTYyYzQuMjg1MTU2LTcuODQzNzUgOS4wMzEyNS0xNi41IDE0LjMyMDMxMy0yNi4wMjM0MzggMTMuOTY4NzUgMjQuMDYyNSA0MC4wMTU2MjQgNDAuMjczNDM4IDY5Ljc3MzQzNyA0MC4yNzM0MzggMzguMjg1MTU2IDAgNzEuNTIzNDM3LTI3LjIxMDkzOCA3OS4wMjM0MzctNjQuNzAzMTI1LjgxNjQwNy00LjA4MjAzMS0xLjgzOTg0My04LjA1NDY4OC01LjkyMTg3NC04Ljg2NzE4OC00LjA5Mzc1LS44MTY0MDYtOC4wNTQ2ODggMS44MjgxMjUtOC44NzEwOTQgNS45MTAxNTctNi4wOTM3NSAzMC40NjA5MzctMzMuMTA1NDY5IDUyLjU3ODEyNC02NC4yMzA0NjkgNTIuNTc4MTI0LTI3LjU1NDY4NyAwLTUxLjE4NzUtMTcuMTA5Mzc0LTYwLjg1MTU2My00MS4yNTM5MDYgMTIuNTMxMjUtMjMuODUxNTYyIDE4LjUzNTE1Ny00OS4wNTQ2ODcgMTguMzMyMDMyLTc0LjA1NDY4NyAzNy44NDM3NS0zMi4zNTkzNzUgOTYuMTkxNDA2LTExLjk0OTIxOSAxMDYuNTM5MDYyIDM1Ljg1OTM3NS44ODY3MTkgNC4wNzQyMTggNC44ODY3MTkgNi42NjAxNTYgOC45Njg3NSA1Ljc3MzQzNyA0LjA3NDIxOS0uODgyODEyIDYuNjYwMTU2LTQuODk4NDM3IDUuNzczNDM4LTguOTY4NzUtMy44MzIwMzItMTcuNzEwOTM3LTEzLjcyNjU2My0zMy44MTI1LTI3LjgzNTkzOC00NS4zMzU5MzctMjYuODEyNS0yMS44Nzg5MDYtNjUuMTI4OTA2LTI0LjM0NzY1Ni05NC42NDA2MjUtNS4yMTA5MzgtMi41MTE3MTktMTkuODIwMzEyLTkuMTAxNTYyLTQwLjQ4MDQ2OC0xOS42MzI4MTItNTcuNjkxNDA2IDQuODM5ODQzLTE0LjU4MjAzMSA3LjQwMjM0My0zMC40NTMxMjUgNy40MDIzNDMtNDYuODU1NDY5IDAtMzQuODAwNzgxIDIxLjY3NTc4Mi03MC4zNDM3NSA1My45OTYwOTQtNzAuMzQzNzUgMzEuOTcyNjU2IDAgNTMuOTkyMTg4IDM1LjA2NjQwNyA1My45OTIxODggNzAuMzQzNzUgMCAzNi45Mjk2ODggMTIuOTkyMTg3IDcxLjE3MTg3NSAzNS42NDA2MjUgOTMuOTYwOTM4IDM5LjI4MTI1IDM5LjUgMzUuNDgwNDY5IDExMi44MzU5MzcgMS4zNTU0NjkgMTU2LjAzNTE1Ni03LjQxMDE1NyA5LjM4MjgxMy0xNS44NDc2NTcgMTYuOTI1NzgxLTI0Ljk2ODc1IDIyLjQyNTc4MXptLTMwOS44Mzk4NDQgMzcuOTAyMzQ0Yy0yMS40ODgyODIgNS4yMjY1NjItNDMuMjMwNDY5IDE1LjUtNTcuNDYwOTM4IDMyLjE0MDYyNS0zLjUxMTcxOCA0LjEwMTU2My05LjcwNzAzMSA0LjU4NTkzNy0xMy44MDg1OTQgMS4wNzgxMjUtNC4xMTMyODEtMy41MzEyNS00LjU5Mzc1LTkuNjk5MjE5LTEuMDc4MTI0LTEzLjgwMDc4MSA2LjU3MDMxMi03LjY3NTc4MSAxNC40MzM1OTMtMTQuMzU1NDY5IDIyLjgwODU5My0xOS43MzA0NjkgNS45Mzc1LTMuODM5ODQ0IDMuNzg1MTU3LTEzLjA0Njg3NS0zLjI1NzgxMi0xMy44MjgxMjUtNi41MzEyNS0uNzI2NTYzLTUyLjg3MTA5NC01Ljg5NDUzMS01Ny44MTI1LTYuNDQ1MzEzLTUuMzYzMjgxLS41OTM3NS05LjI0MjE4OC01LjQ0OTIxOC04LjY1MjM0NC0xMC44MDg1OTMuNTkzNzUtNS4zMDA3ODEgNS4zNDM3NS05LjI0MjE4OCAxMC44MjQyMTktOC42NDg0MzguMDMxMjUuMDAzOTA3LjA1ODU5NC4wMDM5MDcuMDg5ODQ0LjAwNzgxMy0uMDE1NjI2IDAtLjAzMTI1LS4wMDM5MDYtLjA0Mjk2OS0uMDAzOTA2LjAzNTE1Ni4wMDM5MDYuMDkzNzUuMDA3ODEyLjE3OTY4Ny4wMTk1MzEtLjAwMzkwNiAwLS4wMTE3MTggMC0uMDE1NjI1LS4wMDM5MDcuMDgyMDMxLjAxMTcxOS4xNDA2MjUuMDE1NjI2LjE3NTc4MS4wMTk1MzItLjAzMTI1IDAtLjA3MDMxMi0uMDAzOTA2LS4xMDkzNzQtLjAxMTcxOSAxLjU0Mjk2OC4xNzE4NzUgMTAuNTU0Njg3IDEuMTc1NzgxIDUyLjI0NjA5MyA1LjgyNDIxOSAyLjM5ODQzOC0uMTUyMzQ0IDkuNzA3MDMxIDIuOTUzMTI1IDEyLjkwMjM0NC0zLjYwMTU2MyAxLjM5ODQzNy0yLjg3NS44MzU5MzctNi4zMDQ2ODctMS4zOTg0MzctOC41ODk4NDMtNy4zMjAzMTMtNy40NjA5MzgtMTMuMzQzNzUtMTUuNjI1LTE3Ljg5ODQzOC0yNC4yNTM5MDctMi41MjczNDQtNC43NzczNDMtLjY4MzU5NC0xMC43MTA5MzcgNC4wODIwMzEtMTMuMjM0Mzc1aC4wMDc4MTNjNC44MjAzMTItMi41MzUxNTYgMTAuNjk5MjE4LS42NzE4NzUgMTMuMjI2NTYyIDQuMDkzNzUgMTEuMTEzMjgyIDIxLjA1ODU5NCAzMS40OTYwOTQgMzUuMDY2NDA2IDQ5LjAzNTE1NiA0My43ODUxNTYtNC4wMDM5MDYgMTEuMjkyOTY5LTUuNTAzOTA2IDIzLjgzOTg0NC00LjA0Mjk2OCAzNS45OTIxODh6bTAgMCIvPjwvc3ZnPg==" />
                <span class="w3-large">Nutrición y Dietética </span><br>
            </div>
        </li>
      </ul>

      <!--Si el usuario pincha en el boton de que no, debe mostrar la parte del usuario normal y almacenarser el rol como usuario normal. 
        Si por el contrario el usuario pincha en el boton de que si, se debe mostrar la parte de los entrenadores y nutricionistas y que seleccionen ellos el rol que son. -->
    <div class="m-4">
        <table class="table">
            <tbody>
                <tr>
                    <div class="col-md-6">
                        <td> 
                            <input id="tipoUsuario" type="radio" class=" @error('tipoUsuario') is-invalid @enderror" name="tipoUsuario" value="Si" required >Si estoy licenciado
                        </td>
                        <td>
                            <input id="tipoUsuario" type="radio" class=" @error('tipoUsuario') is-invalid @enderror" name="tipoUsuario" value="No" required >No estoy licenciado
                        </td>
                        @error('tipoUsuario')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                </tr>
            </tbody>
        </table>
    </div>

   
    <!---LICENCIADO ---->
    <h3>Añade tu formación como licenciado en...  </h3>
    <div class="m-4">
        <table class="table">
            <tbody>
                <tr>
                    <td> <input  type="radio" class=" @error('rol') is-invalid @enderror" name="rol" value="Entrenador">Ciencias de la Actividad Física y el Deporte </td>
                    <td><input  type="radio" class=" @error('rol') is-invalid @enderror" name="rol" value="Nutricionista">Nutrición y Dietética</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="form-group">
        <label for="curriculum">Introduce tu curriculum</label>
        <input type="file" name="curriculum" class="form-control @error('curriculum') is-invalid @enderror" id="curriculum" >
        @error('curriculum')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{$message}}</strong>
            </span>               
        @enderror
    </div>
    <div class="form-group mt-3">
        <label for="formacion">Formación complementaria</label>
        <input id="formacion" type="hidden"  name="formacion" value="">
        <trix-editor input="formacion" class="form-control @error('formacion') is-invalid @enderror"></trix-editor>
        @error('formacion')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{$message}}</strong>
            </span>               
        @enderror
    </div>
    <div class="form-group mt-3">
        <label for="interes">Datos de interes</label>
        <input id="interes" type="hidden"  name="interes" value="">
        <trix-editor input="interes" class="form-control @error('interes') is-invalid @enderror"></trix-editor>
        @error('interes')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{$message}}</strong>
            </span>               
        @enderror
    </div>

    <div class="form-group mt-4 mb-5">
        <input type="submit" name="" id="" class="btn btn-secondary" value="Agregar Información">
    </div>
</div>


        
    
</div>

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js" integrity="sha512-/1nVu72YEESEbcmhE/EvjH/RxTg62EKvYWLG3NdeZibTCuEtW5M4z3aypcvsoZw03FAopi94y04GhuqRU9p+CQ==" crossorigin="anonymous" defer></script>
@endsection


@endsection