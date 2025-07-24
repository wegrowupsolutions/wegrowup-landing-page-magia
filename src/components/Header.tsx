import { Button } from './ui/button';

const Header = () => {
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

          {/* Desktop CTA */}
          <div className="flex">
            <Button variant="hero" size="lg">
              Fale com um consultor
            </Button>
          </div>
        </div>

      </div>
    </header>
  );
};

export default Header;