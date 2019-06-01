@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-6">
            <div class="card border-primary">
                <div class="card-header">Registro de Ventas</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <form action="">                     
                        <div class=" form-group">
                            <label for="sales">Código de producto</label>
                            <input type="text" class="form-control" name="salesId">

                            <label for="sales">Precio</label>
                            <input type="text" class="form-control" name="salesId">

                            <label for="sales">¿Paga con cuanto?</label>

                        
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">$</span>
                                </div>
                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                <div class="input-group-append">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>

                            <label for="sales">Vuelto</label>
                            <input type="text" class="form-control" name="salesId">
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>

        <div class="col-md-6">
                <div class="card border-primary">
                    <div class="card-header">Ventas del día</div>
    
                    <div class="card-body">

                            <table class="table table-primary">
                                    <thead>
                                      <tr>
                                        <th scope="col">Type</th>
                                        <th scope="col">Column heading</th>
                                        <th scope="col">Column heading</th>
                                        <th scope="col">Column heading</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr class="table">
                                        <th scope="row">Active</th>
                                        <td>Column content</td>
                                        <td>Column content</td>
                                        <td>Column content</td>
                                      </tr>
                                    </tbody>
                            </table>
                        
                    </div>
                </div>
            </div>











    </div>
</div>
@endsection
