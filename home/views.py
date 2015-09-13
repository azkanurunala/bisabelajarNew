from django.shortcuts import render
from info.models import News


def home(request):
    data = {}
    recent_news = News.objects.filter(is_approved=True)[:4]
    
    if recent_news:
        data['recent_news'] = recent_news
    
    return render(request, 'apps/home/index.html', data)

def about(request):
    return render(request, 'apps/home/about.html')

def contact(request):
    return render(request, 'apps/home/hubungi.html')

