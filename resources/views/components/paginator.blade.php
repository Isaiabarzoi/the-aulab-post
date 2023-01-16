
 @if ($paginator->hasPages())
 <nav class="d-flex justify-items-center justify-content-between bg-body">
     <div class="d-flex justify-content-between flex-fill d-sm-none">
         <ul class="pagination">
             {{-- Previous Page Link --}}
             @if ($paginator->onFirstPage())
                 <li class="page-item disabled" aria-disabled="true">
                     <span class="page-link text-dark">@lang('pagination.previous')</span>
                 </li>
             @else
                 <li class="page-item">
                     <a class="page-link text-dark" href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a>
                 </li>
             @endif

             {{-- Next Page Link --}}
             @if ($paginator->hasMorePages())
                 <li class="page-item">
                     <a class="page-link text-dark" href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next')</a>
                 </li>
             @else
                 <li class="page-item disabled" aria-disabled="true">
                     <span class="page-link text-dark">@lang('pagination.next')</span>
                 </li>
             @endif
         </ul>
     </div>

     <div class="d-none flex-sm-fill d-sm-flex align-items-sm-center justify-content-sm-between">
         <div>
             <p class="small text-muted">
                 {!! __('Showing') !!}
                 <span class="fw-semibold">{{ $paginator->firstItem() }}</span>
                 {!! __('to') !!}
                 <span class="fw-semibold">{{ $paginator->lastItem() }}</span>
                 {!! __('of') !!}
                 <span class="fw-semibold">{{ $paginator->total() }}</span>
                 {!! __('results') !!}
             </p>
         </div>

         <div>
             <ul class="pagination">
                 {{-- Previous Page Link --}}
                 @if ($paginator->onFirstPage())
                     <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                         <span class="page-link text-dark" aria-hidden="true">&lt;</span>
                     </li>
                 @else
                     <li class="page-item">
                         <a class="page-link text-dark" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lt;</a>
                     </li>
                 @endif

                 {{-- Pagination Elements --}}
                 @foreach ($elements as $element)
                     {{-- "Three Dots" Separator --}}
                     @if (is_string($element))
                         <li class="page-item disabled" aria-disabled="true"><span class="page-link text-dark">{{ $element }}</span></li>
                     @endif

                     {{-- Array Of Links --}}
                     @if (is_array($element))
                         @foreach ($element as $page => $url)
                             @if ($page == $paginator->currentPage())
                                 <li class="page-item current-page" aria-current="page"><span class="page-link text-dark">{{ $page }}</span></li>
                             @else
                                 <li class="page-item"><a class="page-link text-dark" href="{{ $url }}">{{ $page }}</a></li>
                             @endif
                         @endforeach
                     @endif
                 @endforeach

                 {{-- Next Page Link --}}
                 @if ($paginator->hasMorePages())
                     <li class="page-item">
                         <a class="page-link text-dark" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&gt;</a>
                     </li>
                 @else
                     <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                         <span class="page-link text-dark" aria-hidden="true">&gt;</span>
                     </li>
                 @endif
             </ul>
         </div>
     </div>
 </nav>
@endif
