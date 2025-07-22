@extends('layouts.app')

@section('content')
    @if(session('result'))
        <div class="alert alert-success mb-4 fs-3 text-center">
            @php
                $displayExpr = session('expression') ?? '';
                // Replace * and / with × and ÷ for display
                $displayExpr = str_replace(['*', '/'], ['×', '÷'], $displayExpr);
            @endphp
            {{ $displayExpr ? ("($displayExpr): ") : '' }}{{ session('result') }}
        </div>
    @endif
    <form method="POST" action="{{ route('calculate') }}">
        @csrf
        <div class="mb-3">
            <label for="expression" class="form-label">Enter a mathematical expression:</label>
            <input type="text" class="form-control" id="expression" name="expression" required value="{{ old('expression') }}" readonly style="pointer-events: none; background-color: #fff;">
        </div>
        <div class="mb-3">
            <div class="row g-2">
                <div class="col-3"><button type="button" class="btn btn-secondary btn-lg w-100 py-3 fs-2" onclick="appendToExpression('7')">7</button></div>
                <div class="col-3"><button type="button" class="btn btn-secondary btn-lg w-100 py-3 fs-2" onclick="appendToExpression('8')">8</button></div>
                <div class="col-3"><button type="button" class="btn btn-secondary btn-lg w-100 py-3 fs-2" onclick="appendToExpression('9')">9</button></div>
                <div class="col-3"><button type="button" class="btn btn-warning btn-lg w-100 py-3 fs-2" onclick="appendToExpression('÷')">÷</button></div>
            </div>
            <div class="row g-2 mt-2">
                <div class="col-3"><button type="button" class="btn btn-secondary btn-lg w-100 py-3 fs-2" onclick="appendToExpression('4')">4</button></div>
                <div class="col-3"><button type="button" class="btn btn-secondary btn-lg w-100 py-3 fs-2" onclick="appendToExpression('5')">5</button></div>
                <div class="col-3"><button type="button" class="btn btn-secondary btn-lg w-100 py-3 fs-2" onclick="appendToExpression('6')">6</button></div>
                <div class="col-3"><button type="button" class="btn btn-warning btn-lg w-100 py-3 fs-2" onclick="appendToExpression('×')">×</button></div>
            </div>
            <div class="row g-2 mt-2">
                <div class="col-3"><button type="button" class="btn btn-secondary btn-lg w-100 py-3 fs-2" onclick="appendToExpression('1')">1</button></div>
                <div class="col-3"><button type="button" class="btn btn-secondary btn-lg w-100 py-3 fs-2" onclick="appendToExpression('2')">2</button></div>
                <div class="col-3"><button type="button" class="btn btn-secondary btn-lg w-100 py-3 fs-2" onclick="appendToExpression('3')">3</button></div>
                <div class="col-3"><button type="button" class="btn btn-warning btn-lg w-100 py-3 fs-2" onclick="appendToExpression('-')">-</button></div>
            </div>
            <div class="row g-2 mt-2">
                <div class="col-3"><button type="button" class="btn btn-secondary btn-lg w-100 py-3 fs-2" onclick="appendToExpression('0')">0</button></div>
                <div class="col-3"><button type="button" class="btn btn-secondary btn-lg w-100 py-3 fs-2" onclick="appendToExpression('.')">.</button></div>
                <div class="col-3"><button type="button" class="btn btn-danger btn-lg w-100 py-3 fs-2" onclick="clearExpression()">C</button></div>
                <div class="col-3"><button type="button" class="btn btn-warning btn-lg w-100 py-3 fs-2" onclick="appendToExpression('+')">+</button></div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Calculate</button>
    </form>
    <script>
        function appendToExpression(value) {
            const input = document.getElementById('expression');
            input.value += value;
        }
        function clearExpression() {
            document.getElementById('expression').value = '';
        }
        document.querySelector('form').addEventListener('submit', function(e) {
            const input = document.getElementById('expression');
            // Replace × with * and ÷ with /
            input.value = input.value.replace(/×/g, '*').replace(/÷/g, '/');
        });
    </script>
    @if($errors->any())
        <div class="alert alert-danger mt-4">
            {{ $errors->first() }}
        </div>
    @endif
    <style>
        #expression:focus {
            outline: none;
            box-shadow: none;
        }
    </style>
@endsection
