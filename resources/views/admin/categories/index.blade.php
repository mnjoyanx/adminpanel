@extends('layouts.admin_layout')

@section('title', 'category title')

@section('content')
<h2>this is category content</h2>

<div class="container">
    <div class="card">
    <div class="card-body p-0">
        <table class="table table-stiped projects">
            <thead>
                <tr>
                    <th style="width: 1%">ID</th>
                    <th style="width: 30%">Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->title}}</td>
                    <td class="project-actions text-right">
                        <a href="" class="btn btn-info btn-sm">
                            <i class="fas fa-pencil-alt"></i>
                            Edit
                        </a>
                        <a href="" class="btn btn-danger btn-sm">
                            <i class="fas fa-trash"></i>
                            Delete
                        </a>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    </div>
</div>


@endsection
