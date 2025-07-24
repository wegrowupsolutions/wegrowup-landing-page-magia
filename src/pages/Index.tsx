import Header from '@/components/Header';
import HeroSection from '@/components/HeroSection';
import ProductCard from '@/components/ProductCard';
import CTASection from '@/components/CTASection';
import Footer from '@/components/Footer';

// Import product images
import wepayImage from '@/assets/dashboard-mobile.jpg';
import weconectImage from '@/assets/weconect-hero.jpg';
import weshopImage from '@/assets/weshop-hero.jpg';
import seuagenteImage from '@/assets/seuagente-hero.jpg';

const Index = () => {
  const products = [
    {
      id: 'wepay',
      title: 'Wepay',
      description: 'Transforme a experiência de pagamento dos seus clientes com nossa plataforma integrada de pagamentos digitais e afiliação de produtos. Processe transações com segurança máxima e expanda suas oportunidades de receita.',
      features: [
        'Gateway de pagamento completo e seguro',
        'Sistema de afiliação inteligente',
        'API robusta para integração',
        'Dashboard analítico em tempo real',
        'Suporte a múltiplas moedas',
        'Antifraude avançado'
      ],
      image: wepayImage
    },
    {
      id: 'weconect',
      title: 'WeConect',
      description: 'Conecte-se com os melhores freelancers e profissionais especializados do mercado. Nossa plataforma inteligente garante matches perfeitos entre projetos e talentos, otimizando resultados e reduzindo custos.',
      features: [
        'Matching inteligente de profissionais',
        'Sistema de avaliação e reputação',
        'Gestão completa de projetos',
        'Pagamentos seguros e automáticos',
        'Comunicação integrada',
        'Contratos digitais'
      ],
      image: weconectImage,
      reverse: true
    },
    {
      id: 'weshop',
      title: 'WeShop',
      description: 'Crie sua loja virtual ou marketplace com nossa plataforma de e-commerce avançada. Venda produtos físicos e digitais com ferramentas poderosas de gestão, marketing e analytics.',
      features: [
        'Loja virtual personalizável',
        'Marketplace multivendedor',
        'Gestão avançada de inventário',
        'Marketing automation',
        'SEO otimizado',
        'Integrações nativas'
      ],
      image: weshopImage
    },
    {
      id: 'seuagente',
      title: 'SeuAgente.ai',
      description: 'Revolucione seu atendimento ao cliente com inteligência artificial avançada. Nossa plataforma oferece suporte 24/7, automação de vendas e CRM inteligente para maximizar conversões.',
      features: [
        'Chatbot IA conversacional',
        'Automação de vendas',
        'CRM inteligente integrado',
        'Analytics comportamental',
        'Suporte multicanal',
        'Aprendizado contínuo'
      ],
      image: seuagenteImage,
      reverse: true
    }
  ];

  return (
    <div className="min-h-screen bg-background">
      <Header />
      
      <main>
        <HeroSection />
        
        {/* Products Section */}
        <div className="bg-muted/30">
          {products.map((product, index) => (
            <ProductCard
              key={product.id}
              {...product}
              reverse={product.reverse}
            />
          ))}
        </div>
        
        <CTASection />
      </main>
      
      <Footer />
    </div>
  );
};

export default Index;
