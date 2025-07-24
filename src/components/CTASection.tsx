import { Button } from './ui/button';
import { ArrowRight, Sparkles } from 'lucide-react';

const CTASection = () => {
  return (
    <section className="py-20 lg:py-32 bg-gradient-to-r from-primary to-accent relative overflow-hidden">
      {/* Background Effects */}
      <div className="absolute inset-0">
        <div className="absolute top-0 left-0 w-full h-full opacity-10">
          <div className="absolute top-1/4 left-1/4 w-96 h-96 bg-primary-foreground rounded-full blur-3xl"></div>
          <div className="absolute bottom-1/4 right-1/4 w-64 h-64 bg-accent-foreground rounded-full blur-3xl"></div>
        </div>
      </div>

      <div className="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div className="text-center max-w-4xl mx-auto">
          {/* Badge */}
          <div className="inline-flex items-center gap-2 bg-primary-foreground/20 backdrop-blur-sm border border-primary-foreground/30 rounded-full px-4 py-2 mb-8">
            <Sparkles className="h-4 w-4 text-primary-foreground" />
            <span className="text-primary-foreground text-sm font-medium">
              Comece hoje mesmo
            </span>
          </div>

          {/* Headline */}
          <h2 className="text-3xl sm:text-4xl lg:text-6xl font-bold text-primary-foreground mb-6 leading-tight">
            Pronto para Revolucionar
            <span className="block">Seu Negócio?</span>
          </h2>

          {/* Description */}
          <p className="text-lg sm:text-xl text-primary-foreground/90 mb-12 max-w-2xl mx-auto leading-relaxed">
            Junte-se a milhares de empresas que já transformaram seus resultados 
            com as soluções inovadoras da Wegrowup. Comece sua jornada digital hoje.
          </p>

          {/* CTA Buttons */}
          <div className="flex justify-center">
            <Button 
              variant="outline" 
              size="lg" 
              className="border-[#30B27F] bg-[#30B27F] text-white hover:bg-[#40D68F] hover:border-[#40D68F] text-lg px-8 py-4 transition-smooth shadow-lg hover:shadow-xl"
            >
              Fale com um consultor
              <ArrowRight className="ml-2 h-5 w-5" />
            </Button>
          </div>

          {/* Trust Indicators */}
          <div className="flex flex-col sm:flex-row items-center justify-center gap-8 mt-16 text-primary-foreground/80">
            <div className="flex items-center gap-2">
              <svg className="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path fillRule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clipRule="evenodd" />
              </svg>
              <span className="text-sm">Setup em 5 minutos</span>
            </div>
            <div className="flex items-center gap-2">
              <svg className="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path fillRule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clipRule="evenodd" />
              </svg>
              <span className="text-sm">Sem taxas de setup</span>
            </div>
            <div className="flex items-center gap-2">
              <svg className="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path fillRule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clipRule="evenodd" />
              </svg>
              <span className="text-sm">Suporte 24/7</span>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default CTASection;