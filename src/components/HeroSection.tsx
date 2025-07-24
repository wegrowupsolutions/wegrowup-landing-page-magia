import { Button } from './ui/button';
import { ArrowRight, Sparkles } from 'lucide-react';
import heroBackground from '@/assets/hero-background.jpg';

const HeroSection = () => {
  return (
    <section className="relative min-h-screen flex items-center justify-center overflow-hidden">
      {/* Background Image */}
      <div 
        className="absolute inset-0 bg-cover bg-center bg-no-repeat"
        style={{ backgroundImage: `url(${heroBackground})` }}
      >
        <div className="absolute inset-0 bg-gradient-to-r from-primary/90 to-accent/80"></div>
      </div>

      {/* Content */}
      <div className="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div className="max-w-4xl mx-auto">
          {/* Badge */}
          <div className="inline-flex items-center gap-2 bg-primary-foreground/20 backdrop-blur-sm border border-primary-foreground/30 rounded-full px-4 py-2 mb-8">
            <Sparkles className="h-4 w-4 text-primary-foreground" />
            <span className="text-primary-foreground text-sm font-medium">
              A revolução digital que seu negócio precisa
            </span>
          </div>

          {/* Main Headline */}
          <h1 className="text-4xl sm:text-5xl lg:text-7xl font-bold text-primary-foreground mb-6 leading-tight">
            Transforme Seu
            <span className="block text-transparent bg-gradient-to-r from-primary-foreground to-accent-foreground bg-clip-text">
              Negócio Digital
            </span>
          </h1>

          {/* Subtitle */}
          <p className="text-lg sm:text-xl lg:text-2xl text-primary-foreground/90 mb-12 max-w-3xl mx-auto leading-relaxed">
            Descubra o ecossistema completo de soluções digitais da Wegrowup. 
            Pagamentos, marketplace, conexão profissional e atendimento inteligente 
            em uma única plataforma revolucionária.
          </p>

          {/* CTA Buttons */}
          <div className="flex justify-center">
            <Button 
              variant="outline" 
              size="lg" 
              className="border-[#30B27F] text-[#30B27F] hover:bg-[#30B27F] hover:text-white text-lg px-8 py-4 transition-smooth"
              onClick={() => document.getElementById('wepay')?.scrollIntoView({ behavior: 'smooth' })}
            >
              Explorar Soluções
              <ArrowRight className="ml-2 h-5 w-5" />
            </Button>
          </div>

          {/* Stats */}
          <div className="grid grid-cols-2 lg:grid-cols-4 gap-8 mt-16 max-w-3xl mx-auto">
            <div className="text-center">
              <div className="text-3xl lg:text-4xl font-bold text-primary-foreground mb-2">
                10K+
              </div>
              <div className="text-primary-foreground/80 text-sm">
                Empresas Conectadas
              </div>
            </div>
            <div className="text-center">
              <div className="text-3xl lg:text-4xl font-bold text-primary-foreground mb-2">
                1M+
              </div>
              <div className="text-primary-foreground/80 text-sm">
                Transações Processadas
              </div>
            </div>
            <div className="text-center">
              <div className="text-3xl lg:text-4xl font-bold text-primary-foreground mb-2">
                24/7
              </div>
              <div className="text-primary-foreground/80 text-sm">
                Suporte Inteligente
              </div>
            </div>
            <div className="text-center">
              <div className="text-3xl lg:text-4xl font-bold text-primary-foreground mb-2">
                99.9%
              </div>
              <div className="text-primary-foreground/80 text-sm">
                Uptime Garantido
              </div>
            </div>
          </div>
        </div>
      </div>

      {/* Floating Elements */}
      <div className="absolute inset-0 overflow-hidden pointer-events-none">
        <div className="absolute top-1/4 left-1/4 w-64 h-64 bg-primary-foreground/10 rounded-full blur-3xl animate-pulse"></div>
        <div className="absolute bottom-1/4 right-1/4 w-96 h-96 bg-accent/10 rounded-full blur-3xl animate-pulse delay-1000"></div>
      </div>
    </section>
  );
};

export default HeroSection;