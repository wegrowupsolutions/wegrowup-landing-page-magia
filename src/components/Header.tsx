import { useState } from 'react';
import { Button } from './ui/button';
import { Menu, X } from 'lucide-react';

const Header = () => {
  const [isMenuOpen, setIsMenuOpen] = useState(false);

  const toggleMenu = () => setIsMenuOpen(!isMenuOpen);

  return (
    <header className="fixed top-0 w-full bg-background/80 backdrop-blur-md border-b z-50">
      <div className="container mx-auto px-4 sm:px-6 lg:px-8">
        <div className="flex justify-between items-center h-[3.2rem]">
          {/* Logo */}
          <div className="flex-shrink-0">
            <div className="font-garamond font-bold text-2xl text-gradient">
              Wegrowup
            </div>
          </div>

          {/* Desktop Navigation */}
          <nav className="hidden md:flex space-x-8">
            <a href="#wepay" className="text-foreground hover:text-primary transition-smooth">
              Wepay
            </a>
            <a href="#weconect" className="text-foreground hover:text-primary transition-smooth">
              WeConect
            </a>
            <a href="#weshop" className="text-foreground hover:text-primary transition-smooth">
              WeShop
            </a>
            <a href="#seuagente" className="text-foreground hover:text-primary transition-smooth">
              SeuAgente.ai
            </a>
          </nav>

          {/* Desktop CTA */}
          <div className="hidden md:flex">
            <Button variant="hero" size="lg">
              Começar Agora
            </Button>
          </div>

          {/* Mobile menu button */}
          <div className="md:hidden">
            <Button variant="ghost" size="icon" onClick={toggleMenu}>
              {isMenuOpen ? <X className="h-6 w-6" /> : <Menu className="h-6 w-6" />}
            </Button>
          </div>
        </div>

        {/* Mobile Navigation */}
        {isMenuOpen && (
          <div className="md:hidden">
            <div className="px-2 pt-2 pb-3 space-y-1 bg-background border-t">
              <a
                href="#wepay"
                className="block px-3 py-2 text-foreground hover:text-primary transition-smooth"
                onClick={toggleMenu}
              >
                Wepay
              </a>
              <a
                href="#weconect"
                className="block px-3 py-2 text-foreground hover:text-primary transition-smooth"
                onClick={toggleMenu}
              >
                WeConect
              </a>
              <a
                href="#weshop"
                className="block px-3 py-2 text-foreground hover:text-primary transition-smooth"
                onClick={toggleMenu}
              >
                WeShop
              </a>
              <a
                href="#seuagente"
                className="block px-3 py-2 text-foreground hover:text-primary transition-smooth"
                onClick={toggleMenu}
              >
                SeuAgente.ai
              </a>
              <div className="px-3 py-2">
                <Button variant="hero" className="w-full">
                  Começar Agora
                </Button>
              </div>
            </div>
          </div>
        )}
      </div>
    </header>
  );
};

export default Header;