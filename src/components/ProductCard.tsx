import { Button } from './ui/button';
import { ArrowRight } from 'lucide-react';

interface ProductCardProps {
  title: string;
  description: string;
  features: string[];
  image: string;
  reverse?: boolean;
  id: string;
}

const ProductCard = ({ title, description, features, image, reverse = false, id }: ProductCardProps) => {
  return (
    <section id={id} className="py-20 lg:py-32">
      <div className="container mx-auto px-4 sm:px-6 lg:px-8">
        <div className={`flex flex-col ${reverse ? 'lg:flex-row-reverse' : 'lg:flex-row'} items-center gap-12 lg:gap-20`}>
          {/* Content */}
          <div className="flex-1 max-w-xl">
            <h2 className="text-3xl sm:text-4xl lg:text-5xl font-bold text-foreground mb-6 leading-tight">
              {title}
            </h2>
            <p className="text-lg text-muted-foreground mb-8 leading-relaxed">
              {description}
            </p>
            
            {/* Features */}
            <ul className="space-y-4 mb-8">
              {features.map((feature, index) => (
                <li key={index} className="flex items-center gap-3">
                  <div className="w-2 h-2 bg-primary rounded-full"></div>
                  <span className="text-foreground">{feature}</span>
                </li>
              ))}
            </ul>

            <Button variant="glow" size="lg" className="group">
              Saiba Mais
              <ArrowRight className="ml-2 h-4 w-4 transition-transform group-hover:translate-x-1" />
            </Button>
          </div>

          {/* Image */}
          <div className="flex-1 max-w-2xl">
            <div className="relative">
              <img
                src={image}
                alt={title}
                className="w-full h-auto rounded-2xl shadow-card transition-smooth hover:shadow-glow"
              />
              <div className="absolute inset-0 rounded-2xl bg-gradient-to-t from-primary/20 to-transparent opacity-0 hover:opacity-100 transition-smooth"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default ProductCard;