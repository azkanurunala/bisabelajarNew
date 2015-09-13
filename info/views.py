from django.shortcuts import render, Http404
from django.core.paginator import Paginator
from info.models import News


def get_page_range(page_index, total_pages, page_span):
    start = page_index - page_span
    stop = page_index + page_span
    
    if start < 1:
        stop += 1 - start
        start = 1
    if stop > total_pages:
        stop = total_pages
    
    return range(start, stop + 1)


def home(request, page_index=1):
    page_index = int(page_index)
    
    if not page_index:
        raise Http404()
    
    try:
        page = Paginator(News.objects.all(), 12).page(page_index)
    except:
        raise Http404()
    
    data = {
        'recent_news': News.objects.all()[:4],
        'favorite_news': News.objects.all()[:5],
        'paginated_news': page.object_list,
        'page_range': get_page_range(page_index, page.paginator.num_pages, 4),
        'current_page': page,
    }
    
    return render(request, 'apps/info/info.html', data)


def details(request, news_id=None):
    if news_id is None:
        raise Http404()
    
    try:
        news_details = News.objects.get(id=news_id)
    except:
        raise Http404()
    
    data = {
        'news_details': news_details,
        'related_news': News.objects.all()[:5],
    }
    
    return render(request, 'apps/info/infoDetails.html', data)
