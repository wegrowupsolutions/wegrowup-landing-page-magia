import { Facebook, Twitter, Linkedin, Instagram, Mail, Phone, MapPin } from 'lucide-react';

const Footer = () => {
  return (
    <footer className="bg-foreground text-background">
      <div className="container mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
          {/* Company Info */}
          <div className="lg:col-span-2">
            <div className="font-garamond font-bold text-3xl mb-4 text-muted">
              Wegrowup
            </div>
            <p className="text-muted-foreground mb-6 max-w-md leading-relaxed">
              Transformando negócios através de soluções digitais inovadoras. 
              Nossa missão é conectar, simplificar e potencializar o crescimento 
              das empresas no mundo digital.
            </p>
            <div className="flex space-x-4">
              <a href="https://www.instagram.com/wegrowup.br/" target="_blank" rel="noopener noreferrer" className="text-muted-foreground hover:text-primary transition-smooth">
                <Instagram className="h-5 w-5" />
              </a>
            </div>
          </div>

          {/* Products */}
          <div>
            <h3 className="font-semibold text-lg mb-4 text-background">Produtos</h3>
            <ul className="space-y-3">
              <li>
                <a href="#wepay" className="text-muted-foreground hover:text-primary transition-smooth">
                  Wepay
                </a>
              </li>
              <li>
                <a href="#weconect" className="text-muted-foreground hover:text-primary transition-smooth">
                  WeConect
                </a>
              </li>
              <li>
                <a href="#weshop" className="text-muted-foreground hover:text-primary transition-smooth">
                  WeShop
                </a>
              </li>
              <li>
                <a href="#seuagente" className="text-muted-foreground hover:text-primary transition-smooth">
                  SeuAgente.ai
                </a>
              </li>
            </ul>
          </div>

          {/* Contact */}
          <div>
            <h3 className="font-semibold text-lg mb-4 text-background">Contato</h3>
            <ul className="space-y-3">
              <li className="flex items-center gap-2 text-muted-foreground">
                <Mail className="h-4 w-4" />
                <span>contato@wegrowup.com.br</span>
              </li>
              <li className="flex items-center gap-2 text-muted-foreground">
                <Phone className="h-4 w-4" />
                <span>+55 (11) 9999-9999</span>
              </li>
              <li className="flex items-center gap-2 text-muted-foreground">
                <MapPin className="h-4 w-4" />
                <span>São Paulo, Brasil</span>
              </li>
            </ul>
          </div>
        </div>

        {/* Bottom Bar */}
        <div className="border-t border-muted-foreground/20 mt-12 pt-8 flex flex-col sm:flex-row justify-between items-center">
          <div className="text-muted-foreground text-sm">
            © 2024 Wegrowup. Todos os direitos reservados.
          </div>
          <div className="flex space-x-6 mt-4 sm:mt-0">
            <a href="#" className="text-muted-foreground hover:text-primary transition-smooth text-sm">
              Política de Privacidade
            </a>
            <a href="#" className="text-muted-foreground hover:text-primary transition-smooth text-sm">
              Termos de Uso
            </a>
            <a href="#" className="text-muted-foreground hover:text-primary transition-smooth text-sm">
              Suporte
            </a>
          </div>
        </div>
      </div>
    </footer>
  );
};

export default Footer;