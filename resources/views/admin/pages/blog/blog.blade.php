@extends('admin.layouts.master')
@section('content')
    <section class="section">
        <div class="section-body mt-4">
            <div class="row">
                <div class="col-12">
                    <div class="card design">
                        <div class="card-header text-center justify-content-between">
                            <h4>BLOG</h4>
                            @if (auth()->user()->roles->name != 'subadmin')
                                <a href="{{ route('blog.create') }}"><button class="btn btn-success btn-hover">ADD
                                        BLOG</button></a>
                            @endif
                        </div>
                        @if (Session::has('message'))
                            <div class="alert alert-{{ Session::get('messageType') }}">
                                <strong>{{ Session::get('message') }} </strong>
                                <button type="button" class="btn-close float-right" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th>Title</th>
                                            <th>Header</th>
                                            <th>Image</th>
                                            <th>Text</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($blogs as $blog)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $blog->title }}</td>
                                                <td>{{ $blog->heading }}</td>
                                                <td>
                                                    @if (!empty($blog->image))
                                                        <img width="100" height="100"
                                                            src="{{ asset('/storage/blog/' . $blog->image) }}"
                                                            class="img-fluid wp-post-image lazyloaded" alt=""
                                                            loading="lazy" />
                                                    @else
                                                        <img width="100" height="100"
                                                            src="https://www.comparethestorage.com/blog/wp-content/uploads/2019/06/writing-man-person-hair-white-thinking-1169800-pxhere.com_-1120x747.jpg"
                                                            class="img-fluid wp-post-image lazyloaded" alt=""
                                                            loading="lazy" />
                                                    @endif

                                                    {{-- <a href="{{ asset('/storage/blog/'.$blog->image) }}" target="_blank">
                                                        <i class="fa fa-eye" aria-hidden="true">View</i>
                                                    </a> --}}
                                                </td>
                                                <td class="blog">{!! $blog->text !!}</td>
                                                <td>
                                                    @if ($blog->isauthor == true)
                                                        <a href="{{ route('blog.statusChange', ['id' => $blog->id]) }}"
                                                            class="btn btn-success text-white">Active</a>
                                                    @else
                                                        <a href="{{ route('blog.statusChange', ['id' => $blog->id]) }}"
                                                            class="btn btn-danger text-white">De-Active</a>
                                                    @endif
                                                </td>
                                                @if (auth()->user()->roles->name != 'subadmin')
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <a href="{{ route('blog.edit', ['blog' => $blog->id]) }}"
                                                                    class="btn btn-info text-white">Edit</a>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <form
                                                                    action="{{ route('blog.destroy', ['blog' => $blog->id]) }}"
                                                                    method="POST">
                                                                    @method('DELETE')
                                                                    @csrf
                                                                    <button type="submit"
                                                                        class="btn btn-danger text-white">Delete</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </td>
                                                @endif
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="6">No data</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script type="text/javascript">
        (function() {
            window.addEventListener('load', function() {
                var characterCount = 500
                var blogParagraph = document.querySelectorAll('.blog')
                var trail = "..."
                // Shorten a string to less than maxLen characters without truncating words.
                function shorten(str, maxLen, separator = ' ') {
                    if (str.length <= maxLen) return str;
                    return str.substr(0, str.lastIndexOf(separator, maxLen));
                }
                blogParagraph.forEach(item => {
                    item.textContent = shorten(item.textContent, characterCount) + trail;
                })
            })
        })()
    </script>
@endpush
