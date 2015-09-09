from django.shortcuts import render

# Create your views here.

def home(request):
    return render(request, 'apps/home/index.html')

def about(request):
    return render(request, 'apps/home/about.html')

def contact(request):
    return render(request, 'apps/home/hubungi.html')